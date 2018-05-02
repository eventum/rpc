<?php

/*
 * This file is part of the Eventum (Issue Tracking System) package.
 *
 * @copyright (c) Eventum Team
 * @license GNU General Public License, version 2 or later (GPL-2+)
 *
 * For the full copyright and license information,
 * please see the COPYING and AUTHORS files
 * that were distributed with this source code.
 */

namespace Eventum\RPC;

use DateTime;

/**
 * @method string addAuthorizedReplier(int $issue_id, int $project_id, string $new_replier)
 * @method struct addFile(int $issue_id, string $filename, string $mimetype, base64 $contents, string $file_description, bool $internal_only)
 * @method string assignIssue(int $issue_id, int $project_id, string $developer)
 * @method boolean checkAuthentication()
 * @method string closeIssue(int $issue_id, string $new_status, int $resolution_id, bool $send_notification, string $note)
 * @method string convertNote(int $issue_id, int $note_id, string $target, bool $authorize_sender)
 * @method struct getAbbreviationAssocList(int $prj_id, bool $show_closed)
 * @method struct getClosedAbbreviationAssocList(int $prj_id)
 * @method struct getDeveloperList(int $prj_id)
 * @method struct getDraft(int $issue_id, int $draft_id)
 * @method array getDraftListing(int $issue_id)
 * @method array getEmail(int $issue_id, int $email_id)
 * @method array getEmailListing(int $issue_id)
 * @method struct getFile(int $file_id)
 * @method array getFileList(int $issue_id)
 * @method array getIncidentTypes(int $issue_id, bool $redeemed_only)
 * @method struct getIssueDetails(int $issue_id)
 * @method array getNote(int $issue_id, int $note_id)
 * @method array getNoteListing(int $issue_id)
 * @method array getOpenIssues(int $prj_id, bool $show_all_issues, string $status)
 * @method array getResolutionAssocList()
 * @method string getServerParameter(string $parameter)
 * @method struct getSimpleIssueDetails(int $issue_id)
 * @method struct getTimeTrackingCategories(int $issue_id)
 * @method array getUserAssignedProjects(bool $only_customer_projects)
 * @method string getWeeklyReport(int $week, string $start, string $end, bool $separate_closed, int $prj_id)
 * @method struct getWeeklyReportData(int $prj_id, DateTime $start, DateTime $end, struct $options)
 * @method boolean isValidLogin(string $email, string $password)
 * @method string logCommand(string $command)
 * @method string lookupCustomer(int $prj_id, string $field, string $value)
 * @method string mayChangeIssue(int $issue_id)
 * @method string recordTimeWorked(int $issue_id, int $cat_id, string $summary, int $time_spent)
 * @method string redeemIssue(int $issue_id, array $types)
 * @method string sendDraft(int $issue_id, int $draft_id)
 * @method string setIssueStatus(int $issue_id, string $new_status)
 * @method string takeIssue(int $issue_id, int $project_id)
 * @method string timeClock(string $action)
 * @method string unredeemIssue(int $issue_id, array $types)
 */
class EventumXmlRpcClient extends XmlRpcClient
{
}