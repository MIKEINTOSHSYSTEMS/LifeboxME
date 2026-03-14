### 📊 Lifebox PMI (Performance Monitoring Indicators) 
# Analytics Manager - Complete User Guide

Welcome to the Lifebox Analytics Manager! This comprehensive guide will help you understand and use all features of the PMI (Performance Measurement Indicators) analytics system effectively.

##### ℹ️To Navigate or Search Please search using (CTRL F)

## 📑 Table of Contents
1. [Introduction](#introduction)
2. [System Overview](#system-overview)
3. [Getting Started](#getting-started)
4. [Dashboard Guide](#dashboard-guide)
5. [Job Management](#job-management)
6. [Logs Analysis](#logs-analysis)
7. [Analytics Runner](#analytics-runner)
8. [Coverage Monitoring](#coverage-monitoring)
9. [Function Executor](#function-executor)
10. [Cleanup Tools](#cleanup-tools)
11. [System Health](#system-health)
12. [Data Flow Architecture](#data-flow-architecture)
13. [Troubleshooting Guide](#troubleshooting-guide)
14. [Best Practices](#best-practices)
15. [FAQ](#faq)

---

## 📖 Introduction

The Lifebox Analytics Manager is a powerful tool designed to manage, monitor, and execute PMI (Performance Measurement Indicators) calculations. It provides a comprehensive interface for:

- **Monitoring** calculation jobs and their status
- **Analyzing** performance metrics across organization units
- **Managing** data flows between indicators, data elements, and actuals
- **Troubleshooting** issues with calculations and data quality
- **Optimizing** system performance through cleanup and maintenance tools

---

## 🏗 System Overview

### Key Components

```

┌──────────────────────────────────────────────────────────────┐
│                    Lifebox Analytics Manager                 │
├──────────────────────────────────────────────────────────────┤
│  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐        │
│  │  Indicators  │  │ Data Elements│  │   Datasets   │        │
│  │  (PMI/PDI)   │  │              │  │              │        │
│  └──────┬───────┘  └──────┬───────┘  └──────┬───────┘        │
│         └─────────────────┼─────────────────┘                │
│                           ▼                                  │
│              ┌─────────────────────────┐                     │
│              │   Calculation Engine    │                     │
│              │   (Jobs & Processing)   │                     │
│              └──────────┬──────────────┘                     │
│                         ▼                                    │
│              ┌─────────────────────────┐                     │
│              │    Indicator Actuals    │                     │
│              │     (Final Results)     │                     │
│              └─────────────────────────┘                     │
└──────────────────────────────────────────────────────────────┘

```

### Database Schema Relationships

- **Indicators** → Use **Data Elements** in formulas → Generate **Jobs** → Produce **Actuals**
- **Organization Units** (Regions → Countries → Facilities) → Provide context for calculations
- **Datasets** → Group related indicators → Define calculation periods

---

## 🚀 Getting Started

### First-Time Setup

1. **Verify Database Connection**
   - Check the System Health tab to ensure database connectivity
   - Verify all required tables exist
   - Confirm proper permissions

2. **Review Configuration**
   - Update database credentials in the PHP file
   - Adjust retention periods if needed
   - Set appropriate job limits

3. **Initial Data Load**
   - Import your indicators and data elements
   - Set up organization structure (regions, countries, facilities)
   - Define datasets and their period types

### Navigation Basics

| Section | Purpose | When to Use |
|---------|---------|-------------|
| **Dashboard** | Overview & monitoring | Daily check-ins, quick status view |
| **Jobs** | Job management | Monitoring calculations, retrying failures |
| **Logs** | Historical analysis | Auditing, troubleshooting past issues |
| **Analytics** | Run calculations | On-demand analysis, testing |
| **Coverage** | Data completeness | Ensuring all calculations are done |
| **Functions** | Direct execution | Debugging, advanced operations |
| **Cleanup** | Maintenance | Regular housekeeping |
| **System** | Health monitoring | Troubleshooting performance |

---

## 📊 Dashboard Guide

### Understanding the Dashboard

The dashboard provides a real-time snapshot of your system's health and activity.

### Stat Cards Explained

#### Row 1 Cards

| Card | Metrics | What It Tells You |
|------|---------|-------------------|
| **Total Jobs** | Total/Pending/Completed/Failed | Overall job queue health |
| **Indicators** | Total/Active/Groups | Indicator management status |
| **Datasets** | Total/Active | Data organization status |
| **Actuals** | Total/With Values/Years | Calculation results status |

#### Row 2 Cards

| Card | Metrics | What It Tells You |
|------|---------|-------------------|
| **Data Elements** | Total/With Values | Raw data availability |
| **Avg Execution** | Time/Last Calculation | System performance |
| **Logs (7 days)** | Total/Success/Errors | Recent activity health |
| **Org Units** | Regions/Countries/Facilities | Organization coverage |

### Charts Interpretation

#### Job Status Chart (Doughnut)
- **Green (Completed)**: Successfully processed jobs
- **Yellow (Pending)**: Jobs waiting to be processed
- **Blue (Processing)**: Currently running jobs
- **Red (Failed)**: Jobs that encountered errors
- **Gray (Other)**: Cancelled or orphaned jobs

**What to look for**: 
- High pending count → System may need more processing power
- High failed count → Check logs for recurring errors
- Long-running processing → Investigate stuck jobs

#### Activity Chart (Line)
- **Green line**: Successful calculations over time
- **Red line**: Error occurrences

**What to look for**:
- Spikes in errors → Correlate with data changes or system updates
- Drops in success rate → Investigate recent changes

### Recent Activity Table
Shows the latest 10 calculations with:
- **Timestamp**: When the calculation occurred
- **Type**: What kind of calculation
- **Period**: Time period covered
- **Status**: Success/Error/Started
- **Message**: Details (especially for errors)

---

## 🔧 Job Management

### Understanding Calculation Jobs

Jobs are individual calculation tasks queued for processing. Each job represents one indicator calculation for a specific combination of:
- Period (Yearly/Quarterly/Monthly)
- Organization unit (Region/Country/Facility/Global)

### Job Statuses

| Status | Meaning | Action Needed |
|--------|---------|---------------|
| **Pending** | Waiting to be processed | None - automatic |
| **Processing** | Currently running | Monitor if stuck |
| **Completed** | Successfully finished | Review results if needed |
| **Failed** | Error occurred | Retry or investigate |
| **Cancelled** | Manually stopped | Restart if needed |

### Job Management Actions

#### Filtering Jobs
Use the status dropdown to focus on:
- **Pending**: See what's waiting
- **Failed**: Identify problematic calculations
- **Processing**: Monitor long-running jobs

#### Retrying Failed Jobs
1. Find failed jobs using the filter
2. Click the **↻ (retry)** button next to the job
3. Job resets to pending with 0 attempts
4. System will reprocess automatically

#### Viewing Job Details
Click the **👁️ (eye)** icon to see:
- Complete job parameters
- Related log entries
- Formula being calculated
- Error messages (if failed)

### Job Priority System
- **Higher priority** jobs process first
- Default priority is based on:
  - Critical indicators
  - Time-sensitive periods
  - Manual triggers

---

## 📝 Logs Analysis

### Understanding Calculation Logs

Logs provide a historical record of all calculations, successful or failed.

### Log Entry Components

| Field | Description | Use Case |
|-------|-------------|----------|
| **Time** | When calculation occurred | Chronological tracking |
| **Type** | Calculation type | Filtering specific operations |
| **Indicator** | Which indicator | Performance tracking |
| **Period** | Time period | Coverage analysis |
| **Organization** | Org unit level | Regional analysis |
| **Value** | Calculated result | Result verification |
| **Time (ms)** | Execution duration | Performance monitoring |
| **Status** | Success/Error | Quality assessment |
| **Message** | Details/Errors | Troubleshooting |

### Log Filtering Strategies

#### By Time Range
- **Last 24 hours**: Recent activity
- **Last 7 days**: Weekly trends (default)
- **Last 30 days**: Monthly patterns
- **Last 90 days**: Quarterly analysis

#### By Status
- **Completed**: Successful calculations
- **Error**: Failed calculations (focus troubleshooting)
- **Started**: Initial processing records

### Performance Analysis

**Average Execution Time** indicates:
- **< 100ms**: Excellent performance
- **100-500ms**: Normal operation
- **500-1000ms**: Slightly slow - check complexity
- **> 1000ms**: Investigate - possible optimization needed

---

## 🎯 Analytics Runner

### Purpose
The Analytics Runner allows you to manually trigger calculations for specific scenarios, useful for:
- Testing new indicators
- Validating formulas
- Generating results for specific periods
- Troubleshooting data issues

### Step-by-Step Guide

#### Step 1: Select Period Type
Choose the time granularity:
- **Yearly**: Annual calculations (e.g., total patients per year)
- **Quarterly**: Quarterly trends (e.g., Q1 performance)
- **Monthly**: Monthly tracking (e.g., monthly stock usage)

#### Step 2: Choose Time Period
- **Year**: Select the calendar year
- **Quarter** (if Quarterly): Choose Q1-Q4
- **Month** (if Monthly): Select specific month

#### Step 3: Select Organization Level
Choose the scope:
- **Region**: Calculations for entire regions
- **Country**: Country-level analysis
- **Facility**: Facility-specific metrics
- **Leave blank**: Global calculations

**Hierarchy Rules**:
- Country requires parent region selection
- Facility requires parent country selection
- Can select higher level without lower (e.g., region without country)

#### Step 4: Choose Indicators
- **Single selection**: Click one indicator
- **Multiple selection**: Hold Ctrl/Cmd and click multiple
- **Leave blank**: Runs for all active indicators

#### Step 5: Execute
Click **"Run Analytics"** and wait for results

### Understanding Results

**Results Table shows**:
- **Indicator ID**: Reference number
- **Result**: Calculated value (may be null if no data)
- **Status**: Success or Error

**Summary Statistics**:
- Success count
- Error count
- Execution time

### Common Scenarios

#### Testing a New Indicator
1. Select a single indicator
2. Choose recent period with known data
3. Compare result with expected value
4. Verify formula works correctly

#### Regional Performance Comparison
1. Select region-level organization
2. Run for multiple quarters
3. Compare results across regions
4. Identify best/worst performers

#### Data Quality Check
1. Run all indicators for a period
2. Note which indicators failed
3. Investigate failed indicators for missing data
4. Address data gaps

---

## 📈 Coverage Monitoring

### What is Coverage?
Coverage shows what percentage of required calculations have been completed for each organization level.

### Coverage Metrics Explained

| Metric | Definition | Target |
|--------|------------|--------|
| **Yearly** | Annual calculations completed | 100% |
| **Quarterly** | Quarterly calculations completed | 100% |
| **Monthly** | Monthly calculations completed | 100% |
| **Total** | Sum of all calculations | Matches expected |
| **Coverage %** | Actual/Expected × 100 | >95% |

### Expected Calculations Formula
```

Expected = (Indicators) × (Org Units) × (Periods per Year)

```

Where periods per year:
- **Current year**: 1 (Yearly) + 4 (Quarterly) + Current month (Monthly)
- **Past years**: 1 + 4 + 12 = 17

### Interpreting Coverage Colors

| Color | Coverage | Meaning |
|-------|----------|---------|
| 🟢 Green | >90% | Excellent coverage |
| 🟡 Yellow | 50-90% | Partial coverage - investigate |
| 🔴 Red | <50% | Poor coverage - immediate attention |

### Common Coverage Issues

#### Low Coverage at Facility Level
- **Cause**: Missing data submissions
- **Solution**: Check data entry processes
- **Prevention**: Automate data collection

#### Missing Quarterly Calculations
- **Cause**: Quarter-end jobs not triggered
- **Solution**: Run manual analytics or check scheduler
- **Prevention**: Set up automatic quarterly triggers

#### Zero Coverage for New Indicators
- **Cause**: New indicator not initialized
- **Solution**: Use initialize_existing_indicators function
- **Prevention**: Include in deployment checklist

---

## ⚙️ Function Executor

### Purpose
Direct database function execution for advanced operations, debugging, and maintenance.

### Available Functions

#### calculate_indicator_formula
**Purpose**: Calculate a single indicator value
**When to use**: Testing specific indicator formulas
**Parameters**:
- `p_indicator_id`: ID of indicator to calculate
- `p_period_type`: Yearly/Quarterly/Monthly
- `p_period_year`: Target year
- `p_period_quarter`: (Optional) Quarter number
- `p_period_month`: (Optional) Month number
- `p_region_id`: (Optional) Region filter
- `p_country_id`: (Optional) Country filter
- `p_facility_id`: (Optional) Facility filter

**Example**: Test malaria incidence calculation for Region A, Q1 2024

#### refresh_all_calculations
**Purpose**: Recalculate all indicators for a year
**When to use**: After data corrections or bulk updates
**Parameters**:
- `p_year`: Target year
- `p_force`: true = recalculate even if exists

**Caution**: Can be resource-intensive for large datasets

#### get_data_value
**Purpose**: Retrieve raw data element value
**When to use**: Verify source data before calculation
**Parameters**:
- `p_data_element_id`: Data element to retrieve
- `p_period_type`: Time period
- `p_period_year`: Year
- Additional period and org filters

#### update_pmi_actuals_from_calculations
**Purpose**: Sync actuals table with latest calculations
**When to use**: After manual calculations or data fixes
**Parameters**:
- `p_year`: Target year
- `p_clean_first`: true = delete existing before insert

#### cleanup_old_calculation_data
**Purpose**: Remove outdated records
**When to use**: Regular maintenance
**Parameters**:
- `p_days`: Age threshold in days
- `p_dry_run`: true = preview without deleting

### Execution Tips

1. **Start with calculate_indicator_formula** for testing
2. **Use dry_run=true** before destructive operations
3. **Monitor execution time** to gauge impact
4. **Check results carefully** before proceeding

---

## 🧹 Cleanup Tools

### Purpose
Maintain system performance by removing unnecessary data and resolving duplicates.

### Cleanup Operations

#### Clean Jobs

| Type | Description | When to Use |
|------|-------------|-------------|
| **Completed older than X days** | Remove old successful jobs | Monthly maintenance |
| **All failed jobs** | Clear error records | After fixing issues |
| **All jobs (except processing)** | Full queue reset | System reset |
| **By status** | Selective cleanup | Targeted maintenance |

#### Clean Logs

| Type | Description | When to Use |
|------|-------------|-------------|
| **Older than X days** | Archive old logs | Quarterly |
| **By status** | Remove specific types | After audits |
| **All logs** | Full reset | Development only |

#### Clean Actuals

**Options**:
- **Year**: Remove specific year's data
- **Indicator**: Target specific indicator
- **Period Type**: Filter by period

**Use Cases**:
- Remove test data after validation
- Clear incorrect calculations
- Prepare for recalculation

### Duplicate Management

#### Finding Duplicates
1. Click **"Find"** under Jobs or Actuals
2. System identifies duplicate sets
3. Review duplicate groups before deletion

#### Deduplication Strategies

**Dry Run First**:
1. Click **"Dry Run"** to preview deletions
2. Review what would be removed
3. Ensure critical data preserved

**Actual Deduplication**:
1. Confirm dry run results
2. Click **"Deduplicate"** to remove duplicates
3. System keeps oldest record, removes newer ones

### Sequence Reset

**Purpose**: Reset auto-increment counters after bulk deletions
**When to use**: After removing many records
**Tables**:
- `calculation_jobs`: Reset job_id sequence
- `calculation_log`: Reset log_id sequence
- `indicator_actuals`: Reset actual_id sequence

**Warning**: Only reset when IDs are out of sync

---

## 💓 System Health

### Health Indicators

#### Database Status
- **Healthy**: Connected and responsive
- **Warning**: Slow queries or high load
- **Error**: Connection issues

#### Stuck Jobs
Jobs in 'processing' for >1 hour
- **Healthy**: 0 stuck jobs
- **Warning**: 1-5 stuck jobs
- **Critical**: >5 stuck jobs

#### Failed Jobs
Total failed jobs in queue
- **Healthy**: <10 failures
- **Warning**: 10-50 failures
- **Critical**: >50 failures

#### Pending Queue
Jobs waiting to process
- **Healthy**: <500 pending
- **Warning**: 500-1000 pending
- **Critical**: >1000 pending

#### Last Calculation
Time since last successful calculation
- **Healthy**: <24 hours ago
- **Warning**: 24-48 hours ago
- **Critical**: >48 hours ago

### Table Sizes

Monitor for growth trends:
- **Jobs table**: Should be stable if cleaned regularly
- **Logs table**: Grows with activity, requires periodic cleanup
- **Actuals table**: Grows with new data, archive old records

### Performance Metrics Chart

Shows system performance over time:
- **Response times**: Should stay consistent
- **Spikes**: Indicate heavy loads
- **Trends**: Plan scaling needs

---

## 🔄 Data Flow Architecture

### Complete Data Flow

```

┌────────────────────────────────────────────────────────────────┐
│                       DATA SOURCES                             │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐             │
│  │   DHIS2     │  │   Excel     │  │    API      │             │
│  │  Integration│  │   Import    │  │  Endpoints  │             │
│  └──────┬──────┘  └──────┬──────┘  └──────┬──────┘             │
│         └────────────────┼────────────────┘                    │
│                          ▼                                     │
│              ┌─────────────────────────┐                       │
│              │   lbpmi_data_values     │                       │
│              │   (Raw Data Elements)   │                       │
│              └────────────┬────────────┘                       │
│                           │                                    │
│                           ▼                                    │
│              ┌─────────────────────────┐                       │
│              │   lbpmi_indicators      │                       │
│              │   (With Formulas)       │                       │
│              └────────────┬────────────┘                       │
│                           │                                    │
│                           ▼                                    │
│              ┌─────────────────────────┐                       │
│              │   Calculation Engine    │                       │
│              │   (Jobs Queue)          │                       │
│              └────────────┬────────────┘                       │
│                           │                                    │
│         ┌─────────────────┼─────────────────┐                  │
│         ▼                 ▼                 ▼                  │
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐             │
│  │  Completed  │  │   Failed    │  │  Processing │             │
│  │   Jobs      │  │    Jobs     │  │    Jobs     │             │
│  └──────┬──────┘  └──────┬──────┘  └──────┬──────┘             │
│         └────────────────┼────────────────┘                    │
│                          ▼                                     │
│              ┌─────────────────────────┐                       │
│              │   Calculation Log       │                       │
│              │   (Historical Record)   │                       │
│              └────────────┬────────────┘                       │
│                           │                                    │
│                           ▼                                    │
│              ┌─────────────────────────┐                       │
│              │ lbpmi_indicator_actuals │                       │
│              │   (Final Results)       │                       │
│              └─────────────────────────┘                       │
└────────────────────────────────────────────────────────────────┘

```

### Trigger Points

1. **Data Value Changes** → Queue indicator calculations
2. **Manual Analytics Run** → Direct calculation
3. **Scheduled Jobs** → Batch processing
4. **Formula Updates** → Recalculate affected indicators

### Data Validation Points

| Stage | Validation | Action if Failed |
|-------|------------|------------------|
| Data Import | Format, completeness | Reject, log error |
| Formula Parsing | Syntax, references | Mark indicator inactive |
| Calculation | Division by zero, nulls | Return null, log warning |
| Result Storage | Range checks | Flag for review |

---

## 🔍 Troubleshooting Guide

### Common Issues and Solutions

#### Issue: Jobs Stuck in "Processing"

**Symptoms**:
- Jobs showing "processing" for hours
- No progress in queue

**Diagnosis**:
1. Check System Health for stuck jobs count
2. Review server resources (CPU/Memory)
3. Check database locks

**Solutions**:
```

1. Cancel stuck jobs manually
2. Restart calculation process
3. If recurring, increase processing capacity

```

#### Issue: High Failure Rate

**Symptoms**:
- Many red badges on dashboard
- Error logs filling up

**Common Causes**:

| Error Message | Likely Cause | Solution |
|---------------|--------------|----------|
| "Division by zero" | Missing denominator data | Check data element values |
| "Invalid formula" | Formula syntax error | Review indicator formula |
| "Missing data element" | Data element deleted | Update indicator references |
| "Null result" | Missing source data | Verify data completeness |

#### Issue: Low Coverage

**Symptoms**:
- Red coverage percentages
- Missing expected calculations

**Investigation Steps**:
1. Check which levels have low coverage
2. Identify missing period types
3. Review job queue for pending items
4. Check scheduler configuration

**Solutions**:
```

1. Run manual analytics for missing periods
2. Verify data availability
3. Check trigger configurations
4. Initialize new indicators

```

#### Issue: Performance Degradation

**Symptoms**:
- Slow dashboard loading
- Long execution times
- Timeout errors

**Diagnostic Checklist**:
- [ ] Table sizes (are they too large?)
- [ ] Index usage (are queries optimized?)
- [ ] Concurrent users (too many at once?)
- [ ] Data volume (has it grown significantly?)

**Optimization Steps**:
1. Run cleanup tools
2. Archive old data
3. Optimize database indexes
4. Increase server resources
5. Implement caching

---

## ✅ Best Practices

### Daily Operations

**Morning Checklist**:
- [ ] Check dashboard for anomalies
- [ ] Review failed jobs from overnight
- [ ] Verify recent activity looks normal
- [ ] Check pending queue size

**Throughout Day**:
- Monitor long-running jobs
- Address errors promptly
- Document any issues found

### Weekly Maintenance

**Monday**:
- Run coverage report for previous week
- Address any data gaps
- Review performance metrics

**Friday**:
- Plan weekend batch jobs
- Schedule any bulk operations
- Backup critical data

### Monthly Tasks

**Week 1**: Data Quality
- Run duplicate checks
- Validate indicator formulas
- Review data completeness

**Week 2**: Performance Review
- Analyze execution times
- Optimize slow calculations
- Review table growth

**Week 3**: Cleanup
- Archive old logs
- Remove completed jobs >30 days
- Reset sequences if needed

**Week 4**: Planning
- Review upcoming changes
- Plan indicator updates
- Schedule maintenance windows

### Quarterly Activities

- Full system audit
- User access review
- Performance benchmarking
- Disaster recovery test
- Documentation update

---

## ❓ FAQ

### General Questions

**Q: How often should I check the dashboard?**
A: At least daily, preferably at start and end of day.

**Q: What's the difference between Jobs and Logs?**
A: Jobs are pending/current calculations; Logs are historical records of completed calculations.

**Q: How long should calculations take?**
A: Typically <500ms per indicator. Complex formulas may take longer.

### Troubleshooting

**Q: Why are my calculations showing NULL?**
A: Usually means source data is missing. Check data element values for the period.

**Q: How do I know if a job is really stuck?**
A: If it's been "processing" for >1 hour, it's likely stuck. Check System Health tab.

**Q: What should I do if coverage drops suddenly?**
A: Check for recent changes: new indicators, data source issues, or scheduler problems.

### Maintenance

**Q: How often should I clean up old data?**
A: Jobs: monthly; Logs: quarterly; Actuals: annually or as needed.

**Q: When should I reset sequences?**
A: Only after bulk deletions when IDs become sparse or for development environments.

**Q: Is it safe to deduplicate?**
A: Yes, but always do a dry run first and verify what will be deleted.

### Advanced

**Q: Can I run calculations for future periods?**
A: Yes, but results will be based on available data and projections.

**Q: How do I add a new indicator?**
A: Add to lbpmi_indicators table, then run initialize_existing_indicators function.

**Q: What happens when I update a formula?**
A: Existing actuals remain; new calculations use updated formula. Recalculate if needed.

---

## 📞 Support and Resources

### Getting Help

1. **Check this guide first** - Most questions answered here
2. **Review logs** - Error messages provide clues
3. **Contact support** - If issue persists

### Reporting Issues

When reporting problems, include:
- Screenshot of the issue
- Steps to reproduce
- Any error messages
- Time of occurrence
- Browser and version

### Useful Queries

```sql
-- Check for orphaned jobs
SELECT * FROM lbpmi_calculation_jobs 
WHERE indicator_id NOT IN (SELECT indicator_id FROM lbpmi_indicators);

-- Find slow calculations
SELECT * FROM lbpmi_calculation_log 
WHERE execution_time_ms > 1000 
ORDER BY calculation_timestamp DESC;

-- Coverage summary by month
SELECT period_year, period_month, COUNT(*) 
FROM lbpmi_indicator_actuals 
GROUP BY period_year, period_month 
ORDER BY period_year DESC, period_month DESC;
```

---

## 🎉 Conclusion

The Lifebox Analytics Manager is a powerful tool that, when used correctly, provides invaluable insights into your PMI data. Regular monitoring, proper maintenance, and understanding the data flow will ensure you get the most out of the system.

Remember:

- **Monitor daily** for issues
- **Clean regularly** for performance
- **Document changes** for traceability
- **Test thoroughly** before bulk operations
- **Ask questions** when unsure

Happy Analyzing! 📊✨

---

*Last Updated: March 2026*
*Version: 1.0.0*
