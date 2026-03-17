<?php
// OfficeHandler.php - Enhanced Wrapper for PHPOffice libraries
$possible_paths = [
    __DIR__ . '/vendor/autoload.php',
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../vendor/autoload.php'
];

$autoload_found = false;
foreach ($possible_paths as $path) {
    if (file_exists($path)) {
        require_once $path;
        $autoload_found = true;
        break;
    }
}

if (!$autoload_found) {
    die('Error: Composer autoload.php not found. Please run "composer install"');
}

use PhpOffice\PhpSpreadsheet\IOFactory as SpreadsheetIOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Writer\Csv as CsvWriter;
use PhpOffice\PhpSpreadsheet\Writer\Html as HtmlWriter;
use PhpOffice\PhpSpreadsheet\Writer\Pdf as PdfWriter;
use PhpOffice\PhpSpreadsheet\Shared\Date as SpreadsheetDate;
use PhpOffice\PhpWord\IOFactory as WordIOFactory;
use PhpOffice\PhpWord\Writer\Word2007 as WordWriter;
use PhpOffice\PhpWord\Writer\HTML as WordHtmlWriter;
use PhpOffice\PhpWord\Writer\PDF as WordPdfWriter;
use PhpOffice\PhpPresentation\IOFactory as PresentationIOFactory;
use PhpOffice\PhpPresentation\Shape\Drawing\File as DrawingFile;
use PhpOffice\PhpPresentation\Writer\PowerPoint2007 as PowerPointWriter;
use PhpOffice\PhpPresentation\Writer\HTML as PresentationHtmlWriter;
use Smalot\PdfParser\Parser as PdfParser;
use setasign\Fpdi\Fpdi;

class OfficeHandler
{
    /**
     * Get file info for header display
     */
    public static function getFileInfo($filepath)
    {
        $info = [
            'name' => basename($filepath),
            'size' => self::formatBytes(filesize($filepath)),
            'modified' => date("F d Y H:i:s.", filemtime($filepath)),
            'icon' => self::getFileIcon($filepath),
            'path' => dirname($filepath)
        ];
        return $info;
    }

    /**
     * Format bytes to human readable format
     */
    private static function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);
        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    /**
     * Get appropriate icon for file type
     */
    private static function getFileIcon($filepath)
    {
        $ext = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
        $icons = [
            'pdf' => 'fa-file-pdf-o',
            'xlsx' => 'fa-file-excel-o',
            'xlsm' => 'fa-file-excel-o',
            'xlsb' => 'fa-file-excel-o',
            'xls' => 'fa-file-excel-o',
            'csv' => 'fa-file-text-o',
            'docx' => 'fa-file-word-o',
            'docm' => 'fa-file-word-o',
            'doc' => 'fa-file-word-o',
            'pptx' => 'fa-file-powerpoint-o',
            'pptm' => 'fa-file-powerpoint-o',
            'ppt' => 'fa-file-powerpoint-o'
        ];
        return isset($icons[$ext]) ? $icons[$ext] : 'fa-file-o';
    }

    /**
     * Read Excel file and return enhanced HTML representation
     */
    public static function readExcel($filepath)
    {
        try {
            // Try to identify the reader type
            $inputFileType = SpreadsheetIOFactory::identify($filepath);
            $reader = SpreadsheetIOFactory::createReader($inputFileType);
            $reader->setReadDataOnly(false);
            $spreadsheet = $reader->load($filepath);

            $html = '<div class="excel-viewer" data-file="' . basename($filepath) . '">';

            // Add toolbar
            $html .= '<div class="excel-toolbar mb-3">';
            $html .= '<button class="btn btn-sm btn-success me-2" onclick="saveExcelDocument()"><i class="fa fa-save"></i> Save</button>';
            $html .= '<button class="btn btn-sm btn-primary me-2" onclick="printDocument()"><i class="fa fa-print"></i> Print</button>';
            $html .= '<button class="btn btn-sm btn-info me-2" onclick="saveAsExcel()"><i class="fa fa-floppy-o"></i> Save As...</button>';
            $html .= '<button class="btn btn-sm btn-warning me-2" onclick="exportAsCSV()"><i class="fa fa-file-text-o"></i> Export CSV</button>';
            $html .= '<button class="btn btn-sm btn-secondary me-2" onclick="exportAsPDF()"><i class="fa fa-file-pdf-o"></i> Export PDF</button>';
            $html .= '</div>';

            // Add sheet tabs
            $html .= '<div class="excel-sheet-tabs mb-2">';
            $sheetCount = 0;
            foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
                $sheetTitle = htmlspecialchars($worksheet->getTitle());
                $activeClass = ($sheetCount == 0) ? 'active' : '';
                $html .= '<button class="excel-sheet-tab btn btn-sm btn-outline-secondary ' . $activeClass . '" data-sheet="' . $sheetCount . '">' . $sheetTitle . '</button>';
                $sheetCount++;
            }
            $html .= '</div>';

            // Add sheets content
            $sheetIndex = 0;
            foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
                $displayStyle = ($sheetIndex == 0) ? 'block' : 'none';
                $html .= '<div class="excel-sheet" id="sheet-' . $sheetIndex . '" style="display: ' . $displayStyle . ';">';
                $html .= self::renderExcelSheet($worksheet);
                $html .= '</div>';
                $sheetIndex++;
            }

            $html .= '</div>';

            // Add CSS for Excel viewer
            $html .= '<style>
                .excel-viewer { overflow-x: auto; padding: 10px; }
                .excel-sheet-tabs { border-bottom: 1px solid #ddd; }
                .excel-sheet-tab { margin-right: 2px; border-radius: 4px 4px 0 0; }
                .excel-sheet-tab.active { background: #007bff; color: white; border-color: #007bff; }
                .excel-table { border-collapse: collapse; width: 100%; }
                .excel-table th, .excel-table td { 
                    border: 1px solid #ddd; 
                    padding: 8px; 
                    min-width: 80px;
                }
                .excel-table td[contenteditable="true"]:hover {
                    background-color: #f0f0f0;
                }
                .excel-table td[contenteditable="true"]:focus {
                    background-color: #e8f0fe;
                    outline: 2px solid #007bff;
                    outline-offset: -1px;
                }
                .excel-table .excel-header {
                    background-color: #f2f2f2;
                    font-weight: bold;
                    text-align: center;
                }
                .excel-table .excel-row-number {
                    background-color: #f2f2f2;
                    font-weight: bold;
                    text-align: center;
                    width: 40px;
                }
                .excel-toolbar {
                    padding: 10px;
                    background: #f8f9fa;
                    border-radius: 4px;
                    margin-bottom: 15px;
                }
            </style>';

            return $html;
        } catch (Exception $e) {
            return '<div class="alert alert-danger">Error reading Excel file: ' . $e->getMessage() . '</div>';
        }
    }

    /**
     * Render individual Excel sheet
     */
    private static function renderExcelSheet($worksheet)
    {
        $html = '<table class="excel-table table table-bordered table-sm">';

        // Get highest row and column
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();
        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);

        // Render column headers
        $html .= '<thead><tr>';
        $html .= '<th class="excel-header">#</th>';
        for ($col = 1; $col <= $highestColumnIndex; $col++) {
            $columnLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col);
            $html .= '<th class="excel-header">' . $columnLetter . '</th>';
        }
        $html .= '</tr></thead>';

        // Render rows
        $html .= '<tbody>';
        for ($row = 1; $row <= $highestRow; $row++) {
            $html .= '<tr>';
            $html .= '<td class="excel-row-number">' . $row . '</td>';

            for ($col = 1; $col <= $highestColumnIndex; $col++) {
                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                $value = self::formatCellValue($cell, $worksheet);

                $style = self::getCellStyle($cell, $worksheet);
                $dataAttrs = ' data-row="' . $row . '" data-col="' . $col . '"';
                $dataAttrs .= ' data-column-letter="' . \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col) . '"';

                // Check if cell has formula
                if ($cell->isFormula()) {
                    $dataAttrs .= ' data-formula="' . htmlspecialchars($cell->getValue()) . '"';
                }

                $html .= '<td contenteditable="true"' . $style . $dataAttrs . '>' . $value . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</tbody></table>';

        return $html;
    }

    /**
     * Format cell value appropriately
     */
    private static function formatCellValue($cell, $worksheet)
    {
        $value = $cell->getValue();

        // Handle formulas
        if ($cell->isFormula()) {
            try {
                $value = $cell->getOldCalculatedValue();
            } catch (Exception $e) {
                $value = '#N/A';
            }
        }

        // Handle Rich Text
        if ($value instanceof \PhpOffice\PhpSpreadsheet\RichText\RichText) {
            $value = $value->getPlainText();
        }

        // Handle dates
        if (\PhpOffice\PhpSpreadsheet\Shared\Date::isDateTime($cell)) {
            $dateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value);
            $value = $dateValue->format('Y-m-d H:i:s');
        }

        // Handle null values
        if ($value === null) {
            $value = '';
        }

        return htmlspecialchars($value);
    }

    /**
     * Get cell styling
     */
    private static function getCellStyle($cell, $worksheet)
    {
        $styles = [];
        $style = $worksheet->getStyle($cell->getColumn() . $cell->getRow());

        if ($style) {
            // Font styles
            $font = $style->getFont();
            if ($font->getBold()) $styles[] = 'font-weight: bold';
            if ($font->getItalic()) $styles[] = 'font-style: italic';
            if ($font->getUnderline()) $styles[] = 'text-decoration: underline';
            if ($font->getStrikethrough()) $styles[] = 'text-decoration: line-through';

            // Alignment
            $alignment = $style->getAlignment();
            if ($alignment->getHorizontal() !== 'general') {
                $styles[] = 'text-align: ' . $alignment->getHorizontal();
            }
            if ($alignment->getVertical() !== 'bottom') {
                $styles[] = 'vertical-align: ' . $alignment->getVertical();
            }

            // Background color
            $fill = $style->getFill();
            $bgColor = $fill->getStartColor()->getRGB();
            if ($bgColor && $bgColor !== 'FFFFFF') {
                $styles[] = 'background-color: #' . $bgColor;
            }

            // Text color
            $color = $font->getColor()->getRGB();
            if ($color && $color !== '000000') {
                $styles[] = 'color: #' . $color;
            }

            // Borders
            $borders = $style->getBorders();
            if ($borders->getTop()->getBorderStyle()) {
                $styles[] = 'border-top: 1px solid #000';
            }
        }

        return !empty($styles) ? ' style="' . implode('; ', $styles) . '"' : '';
    }

    /**
     * Save Excel file
     */
    public static function saveExcel($filepath, $data)
    {
        try {
            $inputFileType = SpreadsheetIOFactory::identify($filepath);
            $reader = SpreadsheetIOFactory::createReader($inputFileType);
            $spreadsheet = $reader->load($filepath);

            foreach ($data as $sheetIndex => $sheetData) {
                $worksheet = $spreadsheet->getSheet($sheetIndex);
                if (!$worksheet) continue;

                foreach ($sheetData['cells'] as $cellData) {
                    $coordinate = $cellData['columnLetter'] . $cellData['row'];
                    $worksheet->setCellValue($coordinate, $cellData['value']);
                }
            }

            $writer = SpreadsheetIOFactory::createWriter($spreadsheet, $inputFileType);
            $writer->save($filepath);
            return true;
        } catch (Exception $e) {
            error_log('Excel save error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Save Excel as different format
     */
    public static function saveAsExcel($filepath, $format = 'Xlsx')
    {
        try {
            $spreadsheet = SpreadsheetIOFactory::load($filepath);
            $newPath = dirname($filepath) . '/' . pathinfo($filepath, PATHINFO_FILENAME) . '_copy.' . strtolower($format);

            $writer = SpreadsheetIOFactory::createWriter($spreadsheet, $format);
            $writer->save($newPath);

            return $newPath;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Export as CSV
     */
    public static function exportAsCSV($filepath)
    {
        try {
            $spreadsheet = SpreadsheetIOFactory::load($filepath);
            $csvPath = dirname($filepath) . '/' . pathinfo($filepath, PATHINFO_FILENAME) . '.csv';

            $writer = new CsvWriter($spreadsheet);
            $writer->setDelimiter(',');
            $writer->setEnclosure('"');
            $writer->setLineEnding("\r\n");
            $writer->setSheetIndex(0);
            $writer->save($csvPath);

            return $csvPath;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Export as PDF
     */
    public static function exportAsPDF($filepath)
    {
        try {
            $spreadsheet = SpreadsheetIOFactory::load($filepath);
            $pdfPath = dirname($filepath) . '/' . pathinfo($filepath, PATHINFO_FILENAME) . '.pdf';

            $writer = SpreadsheetIOFactory::createWriter($spreadsheet, 'Dompdf');
            $writer->save($pdfPath);

            return $pdfPath;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Read Word document with enhanced formatting preserving original styles
     */
    public static function readWord($filepath)
    {
        try {
            $phpWord = WordIOFactory::load($filepath);

            // Create a temporary HTML file with proper styling
            $tempHtml = tempnam(sys_get_temp_dir(), 'word_') . '.html';

            // Use HTML writer with full formatting
            $htmlWriter = new WordHtmlWriter($phpWord);
            $htmlWriter->save($tempHtml);

            // Read the generated HTML
            $content = file_get_contents($tempHtml);
            unlink($tempHtml);

            // Add custom CSS to preserve formatting
            $html = '<div class="word-viewer">';

            // Add toolbar
            $html .= '<div class="word-toolbar mb-3">';
            $html .= '<button class="btn btn-sm btn-success me-2" onclick="saveWordDocument()"><i class="fa fa-save"></i> Save</button>';
            $html .= '<button class="btn btn-sm btn-primary me-2" onclick="printDocument()"><i class="fa fa-print"></i> Print</button>';
            $html .= '<button class="btn btn-sm btn-info me-2" onclick="saveAsWord()"><i class="fa fa-floppy-o"></i> Save As...</button>';
            $html .= '<button class="btn btn-sm btn-secondary me-2" onclick="exportAsPDFWord()"><i class="fa fa-file-pdf-o"></i> Export PDF</button>';
            $html .= '</div>';

            $html .= '<div class="word-content" contenteditable="' . (!FM_READONLY ? 'true' : 'false') . '">';
            $html .= $content;
            $html .= '</div></div>';

            // Add enhanced CSS for Word viewer
            $html .= '<style>
            .word-viewer {
                padding: 20px;
                background: white;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            .word-content {
                min-height: 600px;
                padding: 30px;
                outline: none;
                font-family: "Calibri", "Times New Roman", serif;
                line-height: 1.6;
                background: white;
                box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
            }
            .word-content:focus {
                border: 2px solid #007bff;
            }
            .word-content h1 {
                font-size: 2.5em;
                margin-bottom: 0.5em;
                font-weight: bold;
            }
            .word-content h2 {
                font-size: 2em;
                margin-bottom: 0.5em;
            }
            .word-content h3 {
                font-size: 1.5em;
                margin-bottom: 0.5em;
            }
            .word-content p {
                margin-bottom: 1em;
            }
            .word-content table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 1em;
            }
            .word-content td, .word-content th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            .word-content th {
                background-color: #f2f2f2;
                font-weight: bold;
            }
            .word-toolbar {
                padding: 10px;
                background: #f8f9fa;
                border-radius: 4px;
                margin-bottom: 20px;
                border: 1px solid #dee2e6;
            }
            ' . (FM_THEME == 'dark' ? '
            .word-viewer { background: #2d2d2d; border-color: #444; }
            .word-content { background: #3d3d3d; color: #e0e0e0; }
            .word-content table td, .word-content table th { border-color: #555; }
            .word-content th { background-color: #4d4d4d; }
            ' : '') . '
        </style>';

            return $html;
        } catch (Exception $e) {
            return '<div class="alert alert-danger">Error reading Word document: ' . $e->getMessage() . '</div>';
        }
    }

    /**
     * Render Word element
     */
    private static function renderWordElement($element)
    {
        $html = '';

        if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
            foreach ($element->getElements() as $text) {
                if ($text instanceof \PhpOffice\PhpWord\Element\Text) {
                    $style = '';
                    $fontStyle = $text->getFontStyle();
                    if ($fontStyle) {
                        $styles = [];
                        if ($fontStyle->isBold()) $styles[] = 'font-weight: bold';
                        if ($fontStyle->isItalic()) $styles[] = 'font-style: italic';
                        if ($fontStyle->getUnderline()) $styles[] = 'text-decoration: underline';
                        if ($fontStyle->getSize()) $styles[] = 'font-size: ' . ($fontStyle->getSize() * 0.75) . 'pt';
                        if ($fontStyle->getColor()) $styles[] = 'color: #' . $fontStyle->getColor();
                        if (!empty($styles)) {
                            $style = ' style="' . implode('; ', $styles) . '"';
                        }
                    }
                    $html .= '<span' . $style . '>' . htmlspecialchars($text->getText()) . '</span>';
                }
            }
            $html .= '<br>';
        } elseif ($element instanceof \PhpOffice\PhpWord\Element\Title) {
            $level = $element->getDepth();
            $html .= '<h' . $level . '>' . htmlspecialchars($element->getText()) . '</h' . $level . '>';
        } elseif ($element instanceof \PhpOffice\PhpWord\Element\Text) {
            $html .= '<p>' . htmlspecialchars($element->getText()) . '</p>';
        } elseif ($element instanceof \PhpOffice\PhpWord\Element\ListItem) {
            $html .= '<li>' . htmlspecialchars($element->getText()) . '</li>';
        } elseif ($element instanceof \PhpOffice\PhpWord\Element\Table) {
            $html .= '<table class="word-table table table-bordered">';
            foreach ($element->getRows() as $row) {
                $html .= '<tr>';
                foreach ($row->getCells() as $cell) {
                    $html .= '<td>' . $cell->getText() . '</td>';
                }
                $html .= '</tr>';
            }
            $html .= '</table>';
        }

        return $html;
    }

    /**
     * Save Word document
     */
    public static function saveWord($filepath, $content)
    {
        try {
            $phpWord = new \PhpOffice\PhpWord\PhpWord();
            $section = $phpWord->addSection();

            // Parse HTML content and convert to Word elements
            $dom = new DOMDocument();
            @$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
            $body = $dom->getElementsByTagName('body')->item(0);

            if ($body) {
                self::parseHtmlToWord($body, $section);
            }

            $writer = new WordWriter($phpWord);
            $writer->save($filepath);
            return true;
        } catch (Exception $e) {
            error_log('Word save error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Parse HTML to Word elements
     */
    private static function parseHtmlToWord($node, $section)
    {
        foreach ($node->childNodes as $child) {
            if ($child->nodeType == XML_ELEMENT_NODE) {
                switch ($child->tagName) {
                    case 'p':
                        $section->addText($child->textContent);
                        break;
                    case 'h1':
                    case 'h2':
                    case 'h3':
                        $section->addTitle($child->textContent, intval(substr($child->tagName, 1)));
                        break;
                    case 'span':
                        $section->addText($child->textContent);
                        break;
                    case 'div':
                        self::parseHtmlToWord($child, $section);
                        break;
                }
            }
        }
    }

    /**
     * Read PowerPoint file with enhanced display preserving original styles
     */
    public static function readPowerPoint($filepath)
    {
        try {
            // Check if file exists and is readable
            if (!file_exists($filepath) || !is_readable($filepath)) {
                throw new Exception("File not found or not readable");
            }

            // Load the presentation
            $presentation = PresentationIOFactory::load($filepath);

            $html = '<div class="ppt-viewer">';

            // Add toolbar
            $html .= '<div class="ppt-toolbar mb-3">';
            $html .= '<div class="btn-group" role="group">';
            $html .= '<button class="btn btn-sm btn-primary" onclick="window.print()"><i class="fa fa-print"></i> Print</button>';
            $html .= '<button class="btn btn-sm btn-info" onclick="window.location.href=\'?p=' . urlencode(FM_PATH) . '&dl=' . urlencode(basename($filepath)) . '&token=' . $_SESSION['token'] . '\'"><i class="fa fa-download"></i> Download</button>';
            $html .= '</div>';
            $html .= '</div>';

            // Add slide navigation
            $html .= '<div class="ppt-navigation mb-3">';
            $html .= '<button class="btn btn-sm btn-secondary" onclick="prevSlide()"><i class="fa fa-chevron-left"></i> Previous</button>';
            $html .= '<span class="slide-counter mx-3">Slide <span id="current-slide">1</span> of <span id="total-slides">' . $presentation->getSlideCount() . '</span></span>';
            $html .= '<button class="btn btn-sm btn-secondary" onclick="nextSlide()"><i class="fa fa-chevron-right"></i> Next</button>';
            $html .= '</div>';

            // Slides container
            $html .= '<div class="ppt-slides-container">';
            $slideCount = 1;
            foreach ($presentation->getAllSlides() as $slide) {
                $displayStyle = ($slideCount == 1) ? 'block' : 'none';
                $html .= '<div class="ppt-slide" id="slide-' . $slideCount . '" style="display: ' . $displayStyle . ';">';
                $html .= self::renderPowerPointSlideSimple($slide, $slideCount);
                $html .= '</div>';
                $slideCount++;
            }
            $html .= '</div></div>';

            // Add CSS for PowerPoint viewer
            $html .= '<style>
            .ppt-viewer { padding: 20px; }
            .ppt-slide-content {
                background: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.2);
                overflow: hidden;
                margin-bottom: 20px;
            }
            .ppt-slide-content .card-header {
                background: ' . (FM_THEME == 'dark' ? '#343a40' : '#007bff') . ';
                color: white;
                padding: 10px 15px;
                font-weight: bold;
            }
            .ppt-slide-content .card-body {
                padding: 30px;
                min-height: 400px;
                background: white;
                color: #333;
                font-family: "Calibri", "Arial", sans-serif;
            }
            .ppt-slide-content .card-body h1 {
                font-size: 2.5em;
                margin-bottom: 20px;
                color: #333;
            }
            .ppt-slide-content .card-body h2 {
                font-size: 2em;
                margin-bottom: 15px;
                color: #444;
            }
            .ppt-slide-content .card-body h3 {
                font-size: 1.5em;
                margin-bottom: 10px;
                color: #555;
            }
            .ppt-slide-content .card-body p {
                margin-bottom: 10px;
                line-height: 1.6;
            }
            .ppt-slide-content .card-body ul, 
            .ppt-slide-content .card-body ol {
                margin-left: 20px;
                margin-bottom: 10px;
            }
            .ppt-navigation {
                text-align: center;
                margin-bottom: 20px;
            }
            .slide-counter {
                font-weight: bold;
                font-size: 16px;
            }
            @media print {
                .ppt-toolbar, .ppt-navigation { display: none !important; }
                .ppt-slide { display: block !important; page-break-after: always; }
                .ppt-slide-content { box-shadow: none; border: 1px solid #000; }
            }
        </style>';

            // Add JavaScript
            $html .= '<script>
            var currentSlide = 1;
            var totalSlides = ' . $presentation->getSlideCount() . ';
            
            function showSlide(n) {
                if (n < 1 || n > totalSlides) return;
                document.getElementById("slide-" + currentSlide).style.display = "none";
                currentSlide = n;
                document.getElementById("slide-" + currentSlide).style.display = "block";
                document.getElementById("current-slide").textContent = currentSlide;
            }
            
            function nextSlide() {
                if (currentSlide < totalSlides) {
                    showSlide(currentSlide + 1);
                }
            }
            
            function prevSlide() {
                if (currentSlide > 1) {
                    showSlide(currentSlide - 1);
                }
            }
            
            // Keyboard navigation
            document.addEventListener("keydown", function(e) {
                if (e.key === "ArrowRight" || e.key === "Right") {
                    e.preventDefault();
                    nextSlide();
                } else if (e.key === "ArrowLeft" || e.key === "Left") {
                    e.preventDefault();
                    prevSlide();
                }
            });
        </script>';

            return $html;
        } catch (Exception $e) {
            error_log('PowerPoint Error: ' . $e->getMessage());
            return '<div class="alert alert-danger">
                <h4>Error Reading PowerPoint File</h4>
                <p>' . $e->getMessage() . '</p>
                <p>You can <a href="?p=' . urlencode(FM_PATH) . '&dl=' . urlencode(basename($filepath)) . '&token=' . $_SESSION['token'] . '" class="btn btn-primary">Download</a> the file instead.</p>
                </div>';
        }
    }

    /**
     * Simple PowerPoint slide renderer - more reliable
     */
    private static function renderPowerPointSlideSimple($slide, $slideNumber)
    {
        $html = '<div class="ppt-slide-content card">';
        $html .= '<div class="card-header">Slide ' . $slideNumber . '</div>';
        $html .= '<div class="card-body">';

        $hasContent = false;

        foreach ($slide->getShapeCollection() as $shape) {
            if ($shape instanceof \PhpOffice\PhpPresentation\Shape\RichText) {
                foreach ($shape->getParagraphs() as $paragraph) {
                    $text = '';
                    foreach ($paragraph->getRichTextElements() as $element) {
                        if ($element instanceof \PhpOffice\PhpPresentation\Shape\RichText\TextElement) {
                            $text .= $element->getText();
                        }
                    }
                    $text = trim($text);
                    if (!empty($text)) {
                        $html .= '<p>' . htmlspecialchars($text) . '</p>';
                        $hasContent = true;
                    }
                }
            } elseif ($shape instanceof \PhpOffice\PhpPresentation\Shape\Drawing\File) {
                // Handle images
                try {
                    $imagePath = $shape->getPath();
                    if (file_exists($imagePath)) {
                        $imageData = base64_encode(file_get_contents($imagePath));
                        $imageType = pathinfo($imagePath, PATHINFO_EXTENSION);
                        $src = 'data:image/' . $imageType . ';base64,' . $imageData;
                        $html .= '<div class="text-center my-3"><img src="' . $src . '" alt="Slide image" style="max-width:100%; max-height:300px;"></div>';
                        $hasContent = true;
                    }
                } catch (Exception $e) {
                    // Skip image if error
                }
            }
        }

        if (!$hasContent) {
            $html .= '<p class="text-muted text-center"><i class="fa fa-file-powerpoint-o"></i> Slide ' . $slideNumber . ' (empty)</p>';
        }

        $html .= '</div></div>';
        return $html;
    }




    /**
     * Fallback method for PowerPoint files - just show download link
     */
    public static function readPowerPointFallback($filepath)
    {
        $html = '<div class="alert alert-warning">';
        $html .= '<h4>PowerPoint Preview Not Available</h4>';
        $html .= '<p>The PowerPoint file could not be previewed. You can download it instead.</p>';
        $html .= '<p><a href="?p=' . urlencode(FM_PATH) . '&dl=' . urlencode(basename($filepath)) . '&token=' . $_SESSION['token'] . '" class="btn btn-primary">';
        $html .= '<i class="fa fa-download"></i> Download PowerPoint File</a></p>';
        $html .= '</div>';
        return $html;
    }



    /**
     * Render rich text shape with formatting
     */
    private static function renderRichTextShape($shape)
    {
        $html = '';
        $alignment = $shape->getAlignment()->getHorizontal() ?? 'left';

        foreach ($shape->getParagraphs() as $paragraph) {
            $html .= '<div style="text-align: ' . $alignment . '; margin-bottom: 10px;">';

            foreach ($paragraph->getRichTextElements() as $element) {
                if ($element instanceof \PhpOffice\PhpPresentation\Shape\RichText\TextElement) {
                    $text = htmlspecialchars($element->getText());
                    $font = $element->getFont();

                    if ($font) {
                        $style = '';
                        if ($font->isBold()) $style .= 'font-weight: bold; ';
                        if ($font->isItalic()) $style .= 'font-style: italic; ';
                        if ($font->getSize()) $style .= 'font-size: ' . ($font->getSize() * 0.75) . 'pt; ';
                        if ($font->getColor()) $style .= 'color: #' . $font->getColor()->getRGB() . '; ';
                        if ($font->getUnderline()) $style .= 'text-decoration: underline; ';

                        if ($style) {
                            $text = '<span style="' . $style . '">' . $text . '</span>';
                        }
                    }

                    $html .= $text;
                }
            }

            $html .= '</div>';
        }

        return $html;
    }

    /**
     * Render drawing shape
     */
    private static function renderDrawingShape($shape)
    {
        try {
            // Try to get image data
            $imagePath = $shape->getPath();
            if (file_exists($imagePath)) {
                $imageData = base64_encode(file_get_contents($imagePath));
                $imageType = pathinfo($imagePath, PATHINFO_EXTENSION);
                $src = 'data:image/' . $imageType . ';base64,' . $imageData;

                return '<div class="ppt-image" style="text-align: center; margin: 10px 0;">' .
                    '<img src="' . $src . '" alt="' . htmlspecialchars($shape->getName()) . '" ' .
                    'style="max-width: 100%; max-height: 400px; object-fit: contain;">' .
                    '</div>';
            }
        } catch (Exception $e) {
            // Fallback
        }

        return '<div class="ppt-image-placeholder" style="text-align: center; margin: 10px 0; ' .
            'padding: 20px; background: #f0f0f0; border: 1px dashed #ccc;">' .
            '<i class="fa fa-image"></i> ' . htmlspecialchars($shape->getName()) . '</div>';
    }

    /**
     * Render table shape
     */
    private static function renderTableShape($shape)
    {
        $html = '<table class="ppt-table table table-bordered" style="margin: 10px 0;">';

        foreach ($shape->getRows() as $row) {
            $html .= '<tr>';
            foreach ($row->getCells() as $cell) {
                $html .= '<td>' . htmlspecialchars($cell->getText()) . '</td>';
            }
            $html .= '</tr>';
        }

        $html .= '</table>';
        return $html;
    }

    /**
     * Render chart shape (simplified)
     */
    private static function renderChartShape($shape)
    {
        return '<div class="ppt-chart" style="text-align: center; margin: 10px 0; ' .
            'padding: 20px; background: #f8f9fa; border: 1px solid #ddd;">' .
            '<i class="fa fa-bar-chart"></i> Chart: ' . htmlspecialchars($shape->getTitle()->getText()) .
            '</div>';
    }

    /**
     * Read PDF file with native browser viewer
     * Shows PDF with original styling using embedded viewer
     * 
     * @param string $filepath Full path to the PDF file
     * @param string $fileUrl URL path to the PDF file for embedding
     */
    public static function readPDF($filepath, $fileUrl = null)
    {
        // If no URL provided, try to construct it
        if ($fileUrl === null) {
            $fileName = basename($filepath);
            $fileUrl = $fileName;
        }

        // Check if this is being called from within the file manager
        // We need to construct the full URL properly
        if (strpos($fileUrl, 'http') !== 0 && strpos($fileUrl, '://') === false) {
            // Construct full URL if possible
            global $root_url, $http_host, $is_https;
            $protocol = isset($is_https) && $is_https ? 'https' : 'http';
            $baseUrl = $protocol . '://' . $http_host;
            if (!empty($root_url)) {
                $baseUrl .= '/' . $root_url;
            }
            $fileUrl = $baseUrl . '/' . ltrim($fileUrl, '/');
        }

        $html = '<div class="pdf-viewer">';

        // Add toolbar
        $html .= '<div class="pdf-toolbar mb-3">';
        $html .= '<button class="btn btn-sm btn-primary" onclick="openPDFInNewTab()"><i class="fa fa-external-link"></i> Open in New Tab</button>';
        $html .= '<button class="btn btn-sm btn-info" onclick="downloadPDF()"><i class="fa fa-download"></i> Download</button>';
        $html .= '<button class="btn btn-sm btn-secondary" onclick="togglePDFFullscreen()"><i class="fa fa-expand"></i> Fullscreen</button>';
        $html .= '</div>';

        // Native PDF viewer using embed - shows original styling
        $html .= '<div class="pdf-embed-container" id="pdfContainer">';
        $html .= '<embed src="' . htmlspecialchars($fileUrl) . '" type="application/pdf" width="100%" height="800px" />';
        $html .= '</div>';

        // Add CSS
        $html .= '<style>
        .pdf-viewer { padding: 15px; }
        .pdf-toolbar {
            padding: 10px;
            background: #f8f9fa;
            border-radius: 4px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .pdf-embed-container {
            width: 100%;
            height: 800px;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            background: #525659;
        }
        .pdf-embed-container embed {
            display: block;
            width: 100%;
            height: 100%;
        }
        @media print {
            .pdf-toolbar, .no-print { display: none !important; }
            .pdf-embed-container { height: 100vh !important; border: none !important; }
        }
        ' . (FM_THEME == 'dark' ? '
        .pdf-toolbar { background: #2d2d2d; }
        .pdf-toolbar .btn { border-color: #444; }
        ' : '') . '
    </style>';

        // Add JavaScript for PDF controls
        $html .= '<script>
        function openPDFInNewTab() {
            window.open("' . addslashes($fileUrl) . '", "_blank");
        }
        
        function downloadPDF() {
            var currentPath = "' . addslashes(FM_PATH) . '";
            var fileName = "' . addslashes(basename($filepath)) . '";
            window.location.href = "?p=" + encodeURIComponent(currentPath) + "&dl=" + encodeURIComponent(fileName) + "&token=" + window.csrf;
        }
        
        function togglePDFFullscreen() {
            var container = document.getElementById("pdfContainer");
            if (container.requestFullscreen) {
                container.requestFullscreen();
            } else if (container.webkitRequestFullscreen) {
                container.webkitRequestFullscreen();
            } else if (container.mozRequestFullScreen) {
                container.mozRequestFullScreen();
            } else if (container.msRequestFullscreen) {
                container.msRequestFullscreen();
            }
        }
    </script>';

        $html .= '</div>';
        return $html;
    }

    /**
     * Read PDF file with text extraction (legacy method)
     */
    public static function readPDFLegacy($filepath)
    {
        try {
            $parser = new PdfParser();
            $pdf = $parser->parseFile($filepath);

            // Get metadata
            $details = $pdf->getDetails();
            $pages = $pdf->getPages();

            $html = '<div class="pdf-viewer">';

            // Add toolbar
            $html .= '<div class="pdf-toolbar mb-3">';
            $html .= '<button class="btn btn-sm btn-primary me-2" onclick="printDocument()"><i class="fa fa-print"></i> Print</button>';
            $html .= '<button class="btn btn-sm btn-info me-2" onclick="downloadPDF()"><i class="fa fa-download"></i> Download</button>';
            $html .= '</div>';

            // Add metadata
            $html .= '<div class="pdf-metadata card mb-3">';
            $html .= '<div class="card-header">Document Information</div>';
            $html .= '<div class="card-body">';
            $html .= '<p><strong>Pages:</strong> ' . count($pages) . '</p>';
            if (isset($details['Creator'])) {
                $html .= '<p><strong>Creator:</strong> ' . htmlspecialchars($details['Creator']) . '</p>';
            }
            if (isset($details['Producer'])) {
                $html .= '<p><strong>Producer:</strong> ' . htmlspecialchars($details['Producer']) . '</p>';
            }
            $html .= '</div></div>';

            // Add page navigation
            if (count($pages) > 1) {
                $html .= '<div class="pdf-navigation mb-3">';
                $html .= '<button class="btn btn-sm btn-secondary me-2" onclick="prevPdfPage()"><i class="fa fa-arrow-left"></i> Previous</button>';
                $html .= '<span class="page-counter">Page <span id="current-page">1</span> of <span id="total-pages">' . count($pages) . '</span></span>';
                $html .= '<button class="btn btn-sm btn-secondary ms-2" onclick="nextPdfPage()"><i class="fa fa-arrow-right"></i> Next</button>';
                $html .= '</div>';
            }

            // Add pages container
            $html .= '<div class="pdf-pages-container">';
            $pageNum = 1;
            foreach ($pages as $page) {
                $displayStyle = ($pageNum == 1) ? 'block' : 'none';
                $html .= '<div class="pdf-page" id="page-' . $pageNum . '" style="display: ' . $displayStyle . ';">';
                $html .= '<div class="pdf-page-content card">';
                $html .= '<div class="card-header">Page ' . $pageNum . '</div>';
                $html .= '<div class="card-body">';
                $html .= '<pre class="pdf-text" style="white-space: pre-wrap; word-wrap: break-word; font-family: monospace;">';
                $html .= htmlspecialchars($page->getText());
                $html .= '</pre>';
                $html .= '</div></div></div>';
                $pageNum++;
            }
            $html .= '</div></div>';

            // Add CSS and JavaScript
            $html .= '<style>
                .pdf-viewer { padding: 20px; }
                .pdf-page-content { margin-bottom: 20px; }
                .pdf-text { max-height: 600px; overflow-y: auto; padding: 15px; background: #f8f9fa; border-radius: 4px; }
                .pdf-navigation { text-align: center; }
                .pdf-toolbar { padding: 10px; background: #f8f9fa; border-radius: 4px; }
            </style>';

            if (count($pages) > 1) {
                $html .= '<script>
                    var currentPdfPage = 1;
                    var totalPdfPages = ' . count($pages) . ';
                    
                    function showPdfPage(n) {
                        document.getElementById("page-" + currentPdfPage).style.display = "none";
                        currentPdfPage = n;
                        document.getElementById("page-" + currentPdfPage).style.display = "block";
                        document.getElementById("current-page").textContent = currentPdfPage;
                    }
                    
                    function nextPdfPage() {
                        if (currentPdfPage < totalPdfPages) {
                            showPdfPage(currentPdfPage + 1);
                        }
                    }
                    
                    function prevPdfPage() {
                        if (currentPdfPage > 1) {
                            showPdfPage(currentPdfPage - 1);
                        }
                    }
                </script>';
            }

            return $html;
        } catch (Exception $e) {
            return '<div class="alert alert-danger">Error reading PDF file: ' . $e->getMessage() . '</div>';
        }
    }

    /**
     * Read CSV file
     */
    public static function readCSV($filepath)
    {
        try {
            // Try to load as Excel first (CSV is supported)
            $inputFileType = SpreadsheetIOFactory::identify($filepath);
            $reader = SpreadsheetIOFactory::createReader($inputFileType);
            $reader->setReadDataOnly(false);
            $spreadsheet = $reader->load($filepath);

            return self::readExcel($filepath);
        } catch (Exception $e) {
            // Fallback to manual CSV parsing
            $html = '<div class="csv-viewer">';
            $html .= '<div class="csv-toolbar mb-3">';
            $html .= '<button class="btn btn-sm btn-success me-2" onclick="saveCSV()"><i class="fa fa-save"></i> Save</button>';
            $html .= '<button class="btn btn-sm btn-primary me-2" onclick="printDocument()"><i class="fa fa-print"></i> Print</button>';
            $html .= '</div>';

            if (($handle = fopen($filepath, "r")) !== false) {
                $html .= '<table class="csv-table table table-bordered table-sm">';
                $rowNum = 0;
                while (($data = fgetcsv($handle)) !== false) {
                    $html .= '<tr>';
                    foreach ($data as $cell) {
                        $html .= '<td contenteditable="true">' . htmlspecialchars($cell) . '</td>';
                    }
                    $html .= '</tr>';
                    $rowNum++;
                }
                $html .= '</table>';
                fclose($handle);
            }
            $html .= '</div>';

            return $html;
        }
    }
}
