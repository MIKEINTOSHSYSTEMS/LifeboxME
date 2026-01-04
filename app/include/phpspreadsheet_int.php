<?php

require_once( getabspath( 'plugins/PhpOffice/PhpSpreadsheet/Autoloader.php' ) );

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing as WorksheetDrawing;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;

/*
	Note: PHPExcel working with 0..n indexes, PhpSpreadsheet uses 1..(n-1)
*/

function ExportExcelInit($arrdata,$arrwidth) {
    global $cCharset;
	$objPHPExcel = new Spreadsheet();
	$objProp = $objPHPExcel->getProperties();
	$objProp->setCreator("PHPSpreadsheet");
	$objASIndex = $objPHPExcel->setActiveSheetIndex(0);
	$objASIndex->setTitle("Export");
	$col = 1;
	foreach($arrdata as $field=>$data)
	{
		$data = StringHelper::ConvertEncoding($data, 'UTF-8', $cCharset);
		if(substr($data,0,1) == '=')
			$data = '="' . str_replace('"','""',$data) . '"';
		$objASIndex->setCellValueByColumnAndRow($col,1,$data);
		$colLetter = Coordinate::stringFromColumnIndex($col);
		$objASheet = $objPHPExcel->getActiveSheet();
		$objDim = $objASheet->getColumnDimension($colLetter);
//		$objDim->setWidth($arrwidth[$field]);
		$objDim->setAutoSize(true);
		$col++;
	}

	return $objPHPExcel;
}

function ExportExcelRecord( $arrdata, $datatype, $numberRow, $objPHPExcel, $pageObj ) {
    global $cCharset, $locale_info;
	$col = 0;
	$objASIndex = $objPHPExcel->setActiveSheetIndex(0);
	$objASheet = $objPHPExcel->getActiveSheet();
	$rowDim = $objASIndex->getRowDimension($numberRow+1);
	
	foreach($arrdata as $field => $data)
	{
		$col++;
		$colLetter = Coordinate::stringFromColumnIndex($col);
		$colDim = $objASIndex->getColumnDimension($colLetter);
		if($datatype[$field] == "binary")
		{
			if(!$data)
				continue;

			$error_handler = set_error_handler("empty_error_handler");
			
			$gdImage = ImageFromBytes($data);
			
			if($error_handler) set_error_handler($error_handler);
			
			if(!$gdImage)
			{
				$objASIndex->setCellValueByColumnAndRow($col,$numberRow+1,mlang_message('LONG_BINARY'));
				continue;
			}

			$objDrawing = new MemoryDrawing();
			$objDrawing->setImageResource($gdImage);
			$objDrawing->setCoordinates($colLetter.($row+1));
			$objDrawing->setWorksheet($objASheet);
			
			$width = $objDrawing->getWidth()*0.143;
			$height = $objDrawing->getHeight()*0.75;
			
			if($rowDim->getRowHeight() < $height)
				$rowDim->setRowHeight($height);
			
			/*
			$colDimSh = $objASheet->getColumnDimension($colLetter);
			$colDimSh->setAutoSize(false);
			
			if($colDim->getWidth() < $width)
				$colDim->setWidth($width);			
			*/
		}
		elseif($datatype[$field] == "file")
		{
			$arr = runner_json_decode($row[$field]);
			if(count($arr) == 0)
			{
				$data = StringHelper::ConvertEncoding($data, 'UTF-8', $cCharset);
				if($data == "<img src=\"images/no_image.gif\" />")
					$arr[]=array("name"=>"images/no_image.gif");
				else
				{
					if(substr($data,0,1) == '=')
						$data = '="' . str_replace('"','""',$data) . '"';
					$objASIndex->setCellValueByColumnAndRow($col,$numberRow+1,$data);
					continue;
				}
			}
			$offsetY = 0;
			$height = 0;
			foreach($arr as $img)
			{
				
				if(!file_exists($img["name"]) || !$img["name"])
				{
					$data = StringHelper::ConvertEncoding($data, 'UTF-8', $cCharset);
					if(substr($data,0,1) == '=')
						$data = '="' . str_replace('"','""',$data) . '"';
					$objASIndex->setCellValueByColumnAndRow($col,$numberRow+1,$data);
					continue;
				}
				$objDrawing = new WorksheetDrawing();
				$objDrawing->setPath($img["name"]);
				$objDrawing->setCoordinates($colLetter.($numberRow+1));
				$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
				
				$objDrawing->setOffsetY($offsetY);
				
				$width = $objDrawing->getWidth()*0.143;
				$height = $height + $objDrawing->getHeight()*0.75;
				$offsetY = $offsetY + $objDrawing->getHeight();
				
				if($rowDim->getRowHeight() < $height)
					$rowDim->setRowHeight($height);
				
				/*
				$colDimSh = $objASheet->getColumnDimension($colLetter);
				$colDimSh->setAutoSize(false);
				
				if($colDim->getWidth() < $width)
					$colDim->setWidth($width);
				*/
			}
		} else {
			$data = StringHelper::ConvertEncoding($data, 'UTF-8', $cCharset);
			if( substr($data, 0, 1) == '=' )
				$data = '="' . str_replace('"', '""', $data) . '"';
			
			$objASIndex->setCellValueByColumnAndRow( $col, $numberRow + 1, $data );
			
			if ( $datatype[$field] == "date" ) {
				$objStyle = $objASIndex->getStyle( $colLetter.($numberRow + 1) );
				$objNumFrm = $objStyle->getNumberFormat();
				$objNumFrm->setFormatCode( $locale_info["LOCALE_SSHORTDATE"]." hh:mm:ss" );
			} else if( $datatype[ $field ] == "number" ) {
				$formatCode = excelNumberFormat( $pageObj->pSet->isDecimalDigits( $field ) );
				$objASIndex->getStyle( $colLetter.($numberRow + 1) )->getNumberFormat()->setFormatCode( $formatCode );
			} else if( $datatype[ $field ] == "currency" ) {
				$formatCode = excelCurrencyFormat();
				$objASIndex->getStyle( $colLetter.($numberRow + 1) )->getNumberFormat()->setFormatCode( $formatCode );
			}
		}
	}
}

function ExportExcelTotals($arrTotal, $arrTotalMessage, $row, $objPHPExcel) {
    global $cCharset;
	$col = 0;
	$objASIndex = $objPHPExcel->setActiveSheetIndex(0);
	foreach($arrTotal as $key => $value)
	{
		if($value)
			$objASIndex->setCellValueByColumnAndRow($col,$row+1,$arrTotalMessage[$key].StringHelper::ConvertEncoding($value, 'UTF-8', $cCharset));
		$col++;
	}
}

function ExportExcelSave($filename, $format, $objPHPExcel) {
    global $cCharset;
	$filename = StringHelper::ConvertEncoding($filename, 'UTF-8', $cCharset);
    $outFormat = null;
	if($format == "Excel2007") {
        $outFormat = "Xlsx";
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }
	else {
        $outFormat = "Xls";
		header('Content-Type: application/vnd.ms-excel');
    }
	
	header('Content-Disposition: attachment;filename="'.$filename.'";');
	header('Cache-Control: max-age=0');	
	
	$objWriter = IOFactory::createWriter($objPHPExcel, $outFormat);
	$objWriter->save('php://output'); 
}

function openImportExcelFile( $uploadfile ) {
    $ext = getFileExtension( $uploadfile );
	
	if( strtoupper($ext) == "XLSX" )
	{
		$objPHPExcel = IOFactory::load($uploadfile);
	}
	else
	{
		$objPHPExcel = new Spreadsheet();
		$objReader = IOFactory::createReader("Excel5");
		$objPHPExcel = $objReader->load($uploadfile);
	}
	
	return $objPHPExcel;
}

function getImportExcelFields($data) {
    $fields = array();
	
	$worksheet = $data->getSheet(0);
	$highestColumn = $worksheet->getHighestDataColumn();
	
	$highestColumnIndex = Coordinate::columnIndexFromString( $highestColumn );
	for($col = 1; $col <= $highestColumnIndex; ++$col)
	{
		$fieldName = $worksheet->getCellByColumnAndRow($col, 1)->getValue();
		if( !strlen($fieldName) )
			break;
			
		$fields[] = $fieldName;	
	}
	
	return $fields;
}

function ImportDataFromExcel( $fileHandle, $fieldsData, $importPageObject, $autoinc, $headersLineOption, $skipLinesOption ) {
    global $cCharset;
		
	$metaData = array();
	$metaData["totalRecords"] = 0;
	
	$errorMessages = array();
	$unprocessedData = array();		
	$updatedRecords = 0;
	$addedRecords = 0;
	
	$startRow = $skipLinesOption != null ? $skipLinesOption["amount"] + 1 : 1;
	
	foreach($fileHandle->getWorksheetIterator() as $worksheet)
	{
		$highestRow = $worksheet->getHighestRow();
		
		// get a litteral index of the 'highest' column (e.g. 'K')
		$highestColumn = $worksheet->getHighestDataColumn();
		// get an index number of the 'highest' column (e.g. 11)
		$highestColumnIndex = Coordinate::columnIndexFromString( $highestColumn );
		
		for($row = $startRow; $row <= $highestRow; $row++)
		{
			$fieldValuesData = array();

			if ( $headersLineOption != null && $headersLineOption["number"] == $row) {
				continue;
			}
			
			for($col = 1; $col <= $highestColumnIndex; $col++)
			{			
				if( !isset( $fieldsData[ $col - 1 ] ) ) 
					continue;
					
				$importFieldName = $fieldsData[ $col - 1 ]["fName"];
				
				$cell = $worksheet->getCellByColumnAndRow($col, $row);
				$cellValue = $cell->getValue();
				
				if( ExcelDateFormat($cell) ) {
					$cellValue = timestampToDbDate( Date::excelToTimestamp( $cellValue ) );
				} 
				else if( ExcelTimeFormat($cell) ) {
					$cellDateFormat = $fileHandle->getCellXfByIndex( $cell->getXfIndex() )->getNumberFormat()->getFormatCode();
					$cellValue = NumberFormat::ToFormattedString($cellValue, $cellDateFormat);
				}
				else
				{
					if( is_a($cellValue, 'RichText') )
						$cellValue = $cellValue->getPlainText();					
										
					$error_handler = set_error_handler("empty_error_handler");
					$cellValue = StringHelper::ConvertEncoding($cellValue, $cCharset, 'UTF-8');				
					if( $error_handler )
						set_error_handler($error_handler);
					
					$matches = array();
					preg_match('/^="(=.*)"$/i', $cellValue, $matches);
					if( array_key_exists(1, $matches) ) 
						$cellValue = $matches[1];	
				}
				
				$fieldValuesData[ $importFieldName ] = $cellValue;	
			}			

			$importPageObject->importRecord( $fieldValuesData, $autoinc, $addedRecords, $updatedRecords, $errorMessages, $unprocessedData );
			$metaData["totalRecords"] = $metaData["totalRecords"] + 1;
		}
	}

	$metaData["addedRecords"] = $addedRecords;
	$metaData["updatedRecords"] = $updatedRecords;
	$metaData["errorMessages"] = $errorMessages;
	$metaData["unprocessedData"] = $unprocessedData;

	
	return $metaData;
}

function getPreviewDataFromExcel( $fileHandle, &$fieldsData ) {
	global $locale_info;
	$previewData = array();

	$remainNumOfPreviewRows = 100;
	
	foreach($fileHandle->getWorksheetIterator() as $worksheet)
	{
		if( $remainNumOfPreviewRows <= 0 )
			break;
		
		// get the number of rows for the current worksheet	
		$highestRow = $worksheet->getHighestRow();
		if( $highestRow > $remainNumOfPreviewRows )
			$highestRow = $remainNumOfPreviewRows;
		
		$remainNumOfPreviewRows -= $highestRow;
		
		// get a litteral index of the 'highest' column (e.g. 'K')
		$highestColumn = $worksheet->getHighestDataColumn();
		// get an index number of the 'highest' column (e.g. 11)
		$highestColumnIndex = Coordinate::columnIndexFromString( $highestColumn );
		
		// start traversing rows from the first one that contains columns' names
		for($row = 1; $row <= $highestRow; $row++)
		{
			$rowData = array();
			for($col = 1; $col <= $highestColumnIndex; $col++)
			{
				$cell = $worksheet->getCellByColumnAndRow($col, $row);
				$cellValue = $cell->getValue();
				
				if( $row > 1 )
				{
					$columnMatched = isset( $fieldsData[ $col - 1 ] );
					if( ExcelDateFormat($cell) )
					{
						$cellValue = Date::excelToTimestamp( $cellValue );
						
						if( !$columnMatched )
							$fieldsData[ $col - 1 ] = array();

						$fieldsData[ $col - 1 ]["dateTimeType"] = true;
						$fieldsData[ $col - 1 ]["requireFormatting"] = true;
					} else if( ExcelTimeFormat( $cell ) ) {
						$cellDateFormat = $fileHandle->getCellXfByIndex( $cell->getXfIndex() )->getNumberFormat()->getFormatCode();
						$cellValue = NumberFormat::ToFormattedString($cellValue, $cellDateFormat);
					} else if( $columnMatched && $fieldsData[ $col - 1 ]["dateTimeType"] && !strlen($dateFormat) )
						$dateFormat = ImportPage::extractDateFormat( $cellValue );
				}

				$rowData[] = $cellValue;
			}
			if( $rowData && ( count($rowData) >1 || $rowData[0] != null ) )
				$tableData[] = $rowData;
		}
	}
	
	$previewData["tableData"] = $tableData;
	
	if( ImportPage::hasDateTimeFields( $fieldsData ) )
		$previewData["dateFormat"] = !strlen($dateFormat) ? $locale_info["LOCALE_SSHORTDATE"] : $dateFormat;
	
	return $previewData;
}

/**
 * Return true if cell is Date or Datetime, but not Time
 */
function ExcelDateFormat( $cell ) {
	if( !Date::isDateTime( $cell ) ) {
		return false;
	}
	$formatCode = $cell->getWorksheet()->getStyle( $cell->getCoordinate() )->getNumberFormat()->getFormatCode();
	return !ExcelTimeFormatCode( $formatCode );
}

function ExcelTimeFormat( $cell ) {
	if( !Date::isDateTime( $cell ) ) {
		return false;
	}
	$formatCode = $cell->getWorksheet()->getStyle( $cell->getCoordinate() )->getNumberFormat()->getFormatCode();
	return ExcelTimeFormatCode( $formatCode );
}

function ExcelTimeFormatCode( $formatCode ) {
	$timeFormats = array(
		NumberFormat::FORMAT_DATE_TIME1,
        NumberFormat::FORMAT_DATE_TIME2,
        NumberFormat::FORMAT_DATE_TIME3,
        NumberFormat::FORMAT_DATE_TIME4,
        NumberFormat::FORMAT_DATE_TIME5,
        NumberFormat::FORMAT_DATE_TIME6,
        NumberFormat::FORMAT_DATE_TIME7,
        NumberFormat::FORMAT_DATE_TIME8
	);
	foreach( $timeFormats as $f ) {
		if( strpos( $formatCode, $f ) !== false ) {
			return true;
		}
	}
	return false;
}

/**
 * Structly Date or Datetime, not Time
 */
function ExcelDateFormatCode( $formatCode ) {
	$dateFormats = array(
		NumberFormat::FORMAT_DATE_YYYYMMDD2,
		NumberFormat::FORMAT_DATE_YYYYMMDD,
		NumberFormat::FORMAT_DATE_DDMMYYYY,
		NumberFormat::FORMAT_DATE_DMYSLASH,
		NumberFormat::FORMAT_DATE_DMYMINUS,
		NumberFormat::FORMAT_DATE_DMMINUS,
		NumberFormat::FORMAT_DATE_MYMINUS,
		NumberFormat::FORMAT_DATE_XLSX14,
		NumberFormat::FORMAT_DATE_XLSX15,
		NumberFormat::FORMAT_DATE_XLSX16,
		NumberFormat::FORMAT_DATE_XLSX17,
		NumberFormat::FORMAT_DATE_XLSX22,
		NumberFormat::FORMAT_DATE_DATETIME,
		NumberFormat::FORMAT_DATE_YYYYMMDDSLASH
	);
	foreach( $dateFormats as $f ) {
		if( strpos( $formatCode, $f ) !== false ) {
			return true;
		}
	}
	return false;
}


?>