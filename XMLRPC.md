## Available XMLRPC methods ##

Here are available XMLRPC methods in [Eventum](https://github.com/eventum/eventum) as of version 3.8.14.
The methods themselves are defined in [RemoteApi](https://github.com/eventum/eventum/blob/master/lib/eventum/rpc/RemoteApi.php) class in Eventum codebase.
This output is created with Eventum [CLI](https://github.com/eventum/cli) application [DumpMethods](https://github.com/eventum/cli/blob/master/src/Command/DumpMethodsCommand.php) command.

Methods marked `@access public` do not require authentication, while `@access protected` (default) require that you either use `setCredentials` to pass authentication credentials, or put `login` and `password` as first two parameters for the call.

```php
    /**
     * @param int $issue_id
     * @param int $project_id
     * @param string $new_replier
     * @return string
     * @access protected
     */
    function addAuthorizedReplier(int, int, string): string

    /**
     * Upload single file to an issue.
     *
     * @param int $issue_id
     * @param string $filename
     * @param string $mimetype
     * @param base64 $contents
     * @param string $file_description
     * @param bool $internal_only
     * @return struct
     * @access protected
     * @since 3.0.2
     */
    function addFile(int, string, string, base64, string, boolean): struct

    /**
     * @param int $issue_id
     * @param int $project_id
     * @param string $developer
     * @return string
     * @access protected
     */
    function assignIssue(int, int, string): string

    /**
     * Method used to check if Eventum RPC can be reached
     *
     * @return bool
     * @access protected
     * @since 3.0.2
     */
    function checkAuthentication(): boolean

    /**
     * @param int $issue_id
     * @param string $new_status
     * @param int $resolution_id
     * @param bool $send_notification
     * @param string $note
     * @return string
     * @access protected
     * @since 3.3.0 checks user access and issue close state
     */
    function closeIssue(int, string, int, boolean, string): string

    /**
     * @param int $issue_id
     * @param int $note_id
     * @param string $target
     * @param bool $authorize_sender
     * @return string
     * @access protected
     */
    function convertNote(int, int, string, boolean): string

    /**
     * @param int $prj_id
     * @param bool $show_closed
     * @return struct
     * @access protected
     */
    function getAbbreviationAssocList(int, boolean): struct

    /**
     * Returns the list of all users who are currently marked as
     * clocked-in.
     *
     * @return array Returns pairs of usr_full_name => usr_email
     * @access protected
     * @since 3.4.2
     */
    function getClockedInList(): array

    /**
     * @param int $prj_id
     * @return struct
     * @access protected
     */
    function getClosedAbbreviationAssocList(int): struct

    /**
     * @param int $prj_id
     * @return struct
     * @access protected
     */
    function getDeveloperList(int): struct

    /**
     * @param int $issue_id
     * @param int $draft_id
     * @return struct
     * @access protected
     */
    function getDraft(int, int): struct

    /**
     * @param int $issue_id
     * @return array
     * @access protected
     */
    function getDraftListing(int): array

    /**
     * @param int $issue_id
     * @param int $email_id
     * @return array
     * @access protected
     */
    function getEmail(int, int): array

    /**
     * @param int $issue_id
     * @return array
     * @access protected
     */
    function getEmailListing(int): array

    /**
     * @param int $file_id
     * @return struct
     * @access protected
     */
    function getFile(int): struct

    /**
     * @param int $issue_id
     * @return array
     * @access protected
     */
    function getFileList(int): array

    /**
     * @param int $issue_id
     * @param bool $redeemed_only
     * @return array
     * @access protected
     */
    function getIncidentTypes(int, boolean): array

    /**
     * @param int $issue_id
     * @return struct
     * @access protected
     */
    function getIssueDetails(int): struct

    /**
     * @param int $issue_id
     * @param int $note_id
     * @return array
     * @access protected
     */
    function getNote(int, int): array

    /**
     * @param int $note_id
     * @param array $fields
     * @return array
     * @access protected
     * @since 3.8.14
     */
    function getNoteDetails(int, array): array

    /**
     * @param int $issue_id
     * @return array
     * @access protected
     */
    function getNoteListing(int): array

    /**
     * @param int $prj_id
     * @param bool $show_all_issues
     * @param string $status
     * @return array
     * @access protected
     */
    function getOpenIssues(int, boolean, string): array

    /**
     * Get messages from irc_notice table that are not yet handled.
     * Used by the IRC bot.
     *
     * @param int $prj_id
     * @param int $limit
     * @return array
     * @access protected
     * @since 3.4.2
     */
    function getPendingMessages(int, int): array

    /**
     * @param string $projectTitle
     * @return array
     * @access protected
     * @since 3.4.2
     */
    function getProjectByName(string): array

    /**
     * Returns a simple list of issues that are currently set to some
     * form of quarantine. This is mainly used by the IRC interface.
     *
     * @return array List of quarantined issues
     * @access protected
     * @since 3.4.2
     */
    function getQuarantinedIssueList(): array

    /**
     * @return array
     * @access public
     */
    function getResolutionAssocList(): array

    /**
     * Method used to retrieve server parameters
     *
     * @param string $parameter
     * @return string
     * @access protected
     * @since 3.0.2
     */
    function getServerParameter(string): string

    /**
     * @param int $issue_id
     * @return struct
     * @access protected
     */
    function getSimpleIssueDetails(int): struct

    /**
     * @param int $issue_id
     * @return struct
     * @access protected
     */
    function getTimeTrackingCategories(int): struct

    /**
     * @param bool $only_customer_projects
     * @return array
     * @access protected
     */
    function getUserAssignedProjects(boolean): array

    /**
     * @param int $week
     * @param string $start
     * @param string $end
     * @param bool $separate_closed
     * @param int $prj_id
     * @return string
     * @access protected
     * @deprecated use getWeeklyReportData() and format data yourself
     */
    function getWeeklyReport(int, string, string, boolean, int): string

    /**
     * Get data for weekly report.
     *
     * @param int $prj_id The project id
     * @param DateTime $start
     * @param DateTime $end
     * @param struct $options
     * @return struct
     * @access protected
     * @since 3.0.2
     */
    function getWeeklyReportData(int, string, string, struct): struct

    /**
     * @param string $email
     * @param string $password
     * @return bool
     * @access public
     */
    function isValidLogin(string, string): boolean

    /**
     * @param string $command
     * @return string
     * @access protected
     * @deprecated since 3.3.0 this method does nothing
     */
    function logCommand(string): string

    /**
     * @param int $prj_id
     * @param string $field
     * @param string $value
     * @access protected
     * @return string
     */
    function lookupCustomer(int, string, string): string

    /**
     * Mark event as sent.
     * Used by the IRC bot.
     *
     * @param int $prj_id
     * @param int $ino_id
     * @access protected
     * @since 3.4.2
     */
    function markEventSent(int, int): string

    /**
     * TODO: use boolean return
     *
     * @param int $issue_id
     * @return string
     * @access protected
     */
    function mayChangeIssue(int): string

    /**
     * @param int $issue_id
     * @param int $cat_id
     * @param string $summary
     * @param int $time_spent
     * @return string
     * @access protected
     * @since 3.0.2 checks access via Issue::canUpdate
     */
    function recordTimeWorked(int, int, string, int): string

    /**
     * @param int $issue_id
     * @param array $types
     * @return string
     * @access protected
     */
    function redeemIssue(int, array): string

    /**
     * @param int $issue_id
     * @param int $draft_id
     * @return string
     * @access protected
     */
    function sendDraft(int, int): string

    /**
     * @param int $issue_id
     * @param string $new_status
     * @return string
     * @access protected
     * @since 3.2.2 checks access via Access::canChangeStatus
     */
    function setIssueStatus(int, string): string

    /**
     * @param int $issue_id
     * @param int $project_id
     * @return string
     * @access protected
     */
    function takeIssue(int, int): string

    /**
     * @param string $action
     * @return string
     * @access protected
     */
    function timeClock(string): string

    /**
     * @param int $issue_id
     * @param array $types
     * @return string
     * @access protected
     */
    function unredeemIssue(int, array): string
```
