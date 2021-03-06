<?php
$hc_lang_news = array(

//	Add/Edit Subscriber
'TitleAddR'			=>	'Add Newsletter Subscriber',
'InstructAddR'		=>	'To add a new subscriber complete the form below. Once the subscriber has been added, and they have (optionally) confirmed their subscription, they will begin receiving newsletters.<br /><br /><b>Note:</b> Sending an opt-in confirmation email will help reduce complaints of spam.',
'TitleEditR'		=>	'Edit Newsletter Subscriber',
'InstructEditR'		=>	'Use the form below to edit the newsletter subscriber.',

//	Search Subscribers
'TitleBrowseS'		=>	'Newsletter Subscribers',
'InstructBrowseS'	=>	'Select the subscriber below you wish to edit or delete.<br /><br />Search input matches against subscriber First Name, Last Name and Email Address. Include more detail for a more refined result list.<br /><br /><img src="'.AdminRoot.'/img/icons/edit.png" width="16" height="16" alt="" /> = Edit Subscriber<br /><img src="'.AdminRoot.'/img/icons/delete.png" width="16" height="16" alt="" /> = Delete Subscriber',

//	Send Newsletter
'TitleDraft'		=>	'Compose Draft',
'InstructDraft'		=>	'Drafts contain settings that affect the sending of the newsletter, including: internal label (Title), public description (Subject), what events will be included (Event Dates), which subscribers will receive it (Group Selection), what format they will receive it in (Template) and whether it will be available in the public newsletter archive (Archive Status).<br /><br /><b>Note:</b> A draft can be used to send more than one newsletter and updated for reuse of future mailings.',
'TitleCreate'		=>	'Create Newsletter',
'InstructCreateA'	=>	'Available drafts are listed below, with the most recently updated first. From here you can create a new Newsletter to be sent using a draft. You can also edit or delete any draft in the list below.<br /><br /><b>Note:</b> Drafts with event date ranges before today are highlighted in red.<br /><br /><img src="'.AdminRoot.'/img/icons/email_create.png" width="16" height="16" alt="" /> = Create Newsletter<br /><img src="'.AdminRoot.'/img/icons/edit.png" width="16" height="16" alt="" /> = Edit Draft<br /><img src="'.AdminRoot.'/img/icons/delete.png" width="16" height="16" alt="" /> = Delete Draft',
'InstructCreateB'	=>	'Your draft selection will create the following newsletter. Please review the details below before approving your newsletter for sending.',
'TitleQueue'		=>	'Newsletter Queue',
'InstructQueue'		=>	'The newsletter queue contains all newsletters that have been created and approved for sending. Newsletters are group by progress, both in progress and completed newsletters are available for review.<br /><br />Tools available depend on the status of the newsletter.<br /><br /><img src="'.AdminRoot.'/img/icons/play.png" width="16" height="16" alt="" /> = Send (Resume Sending) Newsletter<br /><img src="'.AdminRoot.'/img/icons/pause.png" width="16" height="16" alt="" /> = Pause Sending<br /><img src="'.AdminRoot.'/img/icons/email_open.png" width="16" height="16" alt="" /> = View Newsletter Archive<br /><img src="'.AdminRoot.'/img/icons/report.png" width="16" height="16" alt="" /> = View Newsletter Report<br /><img src="'.AdminRoot.'/img/icons/email_delete.png" width="16" height="16" alt="" /> = Delete Newsletter',
'TitleSend'			=>	'Sending Newsletter',
'InstructSend'		=>	'The controls below will allow you to send your newsletter. If you need to take a break simply pause the newsletter and you can come back later and resume sending where you left off.<br /><br /><b>Note:</b> Do NOT navigate away from this page until you are <b>notified sending is complete</b> or you pause sending.',

//	Edit Template
'TitleEditN'		=>	'Event Newsletter Templates',
'InstructEditNE'	=>	'Use the form below to create your new template. Place template variables where you want a newsletter components to be placed in your template.',
'InstrcutEditNA'	=>	'Use the form below to edit your the existing template. Place template variables where you want different newsletter components to be placed in your template.',
'InstructEditNL'	=>	'Select the template you wish to edit or delete from the list below. Click "Add Template" to add a new template.',

//	Subscriber Groups
'TitleGroup'		=>	'Newsletter Subscriber Groups',
'InstructGroup'		=>	'Newsletter subscriber groups allow you to segment your subscribers and send targeted mailings to specific groups of subscribers.<br /><br />Subscribers can modify their group assignments (for public groups only) when configuring their subscription settings.<br /><br /><img src="'.AdminRoot.'/img/icons/edit.png" width="16" height="16" alt="" /> = Edit Group<br /><img src="'.AdminRoot.'/img/icons/delete.png" width="16" height="16" alt="" /> = Delete Group',
'InstructAddG'		=>	'Use the form below to create a new subscriber group.',
'InstructEditG'		=>	'Use the form below to edit this subscriber group.',

//	Form Elements
'ResPer'			=>	'Show Per Page:',
'Page'				=>	'Page:',
'Filter'			=>	'Search Subscribers',
'Subscriber'		=>	'Subscriber Details',
'AddedBy'			=>	'Added By:',
'AddAdmin'			=>	'Deleted Admin',
'AddPublic'			=>	'Public Sign-Up',
'FName'				=>	'First Name:',
'LName'				=>	'Last Name:',
'Email'				=>	'Email:',
'Occupation'		=>	'Occupation:',
'Birth'				=>	'Birth Year:',
'Birth0'			=>	'[Select a Year]',
'Gender'			=>	'Gender:',
'Gender0'			=>	'[Select Gender]',
'GenderF'			=>	'Female',
'GenderM'			=>	'Male',
'Referral'			=>	'Referral:',
'Referral0'			=>	'[Select How You Found Us]',
'Referral1'			=>	'Advertisement (Web)',
'Referral2'			=>	'Advertisement (Other)',
'Referral3'			=>	'Another Site (Event Content Syndication)',
'Referral4'			=>	'Another Site (Link)',
'Referral5'			=>	'Friend (Event Emailed By)',
'Referral6'			=>	'Friend (Other)',
'Referral7'			=>	'Search Engine',
'Postal'			=>	'Zip Code:',
'Name'				=>	'Name',
'Emailb'			=>	'Email',
'Registered'		=>	'Registered',
'NoSub'				=>	'There are currently no subscribers available, or no subscribers meeting that criteria.',
'NoSubLink'			=>	'View All Subscribers',
'NoSubscribers'		=>	'There are no active newsletter subscribers. Mailing cannot be sent.',
'Settings'			=>	'Newsletter Draft Settings',
'Dates'				=>	'Event Dates:',
'Template'			=>	'Template:',
'NoTemplates'		=>	'No templates currently available.',
'AddTemplate'		=>	'Click here to add a template.',
'UnsentEvents'		=>	'Unsent Events For These Dates:',
'FirstUnsent'		=>	'First Unsent Event Occurs:',
'SendNewsletter'	=>	'Send Newsletter',
'UpcomingEvents'	=>	'Upcoming Events',
'UpcomingEventsM'	=>	'Upcoming Multiple Date Events (Click to View All Dates):',
'Unsubscribe'		=>	'To unsubscribe use this link:',
'EditSub'			=>	'To edit your registration use this link:',
'NoEvents'			=>	'No Events Available.',
'NewsVariable'		=>	'Newsletter Variables',
'Variable'			=>	'Variable:',
'TempSettings'		=>	'Template Settings',
'TempVariables'		=>	'Template Variables',
'TempContents'		=>	'Template Contents',
'NameLabel'			=>	'Name:',
'VariableLabel'		=>	'Variables:',
'NewTemplate'		=>	'Add Template',
'TemplateName'		=>	'Template Name',
'TemplateMsg'		=>	'Message',
'Yes'				=>	'Yes',
'No'				=>	'No',
'InvalidTemplate'	=>	'Invalid Template. Please select a different template.',
'ShowVariables'		=>	'Show Variables',
'HideVariables'		=>	'Hide Variables',
'Categories'		=>	'Categories:',
'Groups'			=>	'Subscribe To:',
'SendGroups'		=>	'Send To Groups:',
'To'				=>	'to',
'SubGroup'			=>	'Subscriber Group',
'GroupName'			=>	'Name:',
'GroupDesc'			=>	'Description:',
'GroupStatus'		=>	'Status:',
'GroupNameLabel'	=>	'Name',
'GroupStatusLabel'	=>	'Status',
'GroupCountLabel'	=>	'Subscribers',
'AdminOnly'			=>	'Admin Only',
'Public'			=>	'Public',
'NewGroup'			=>	'Add Group',
'NoGroup'			=>	'There are no subscriber groups currently available.',
'NewsLabel'			=>	'Newsletter Settings',
'NewsAbout'			=>	'Newsletter settings determine what <b>types of newsletters</b> this subscriber will receive.',
'LinkFormat'		=>	'Link Format:',
'LinkFormat0'		=>	'Full Site',
'LinkFormat1'		=>	'Mobile',
'LinkFormat2'		=>	'Adjust to Device',
'EventLabel'		=>	'Event Settings',
'EventAbout'		=>	'Event settings determine what <b>types of events</b> this subscriber will receive.',
'DeleteNoConfirm'	=>	'Delete Unconfimed:',
'VarLabelE'			=>	'Event Variables',
'VarLabelM'			=>	'Message Variables',
'VarLabelS'			=>	'Subscriber Variables',
'VarLabelSM'		=>	'Social Variables',
'VarLabelL'			=>	'Link Variables',
'VarLabelST'		=>	'Statistics Variables',
'NoGroups'			=>	'No Subscriber Groups Available',
'Message'			=>	'Custom Message:',
'MessageNote'		=>	'Custom messages are only included when the selected template contains the variable:',
'MailSent'			=>	'Sent On:',
'MailSentBy'		=>	'Created By:',
'MailName'			=>	'Title:',
'MailSubject'		=>	'Subject:',
'ArchStatus'		=>	'Archive Status:',
'ArchStatus0'		=>	'NOT Available in Public Archive',
'ArchStatus1'		=>	'Available in Public Archive',
'CreatedDate'		=>	'Created:',
'LastModDate'		=>	'Last Modified:',
'ModifyLabel'		=>	'Last Mod.',
'TitleLabel'		=>	'Draft',
'DatesLabel'		=>	'Events',
'TemplateLabel'		=>	'Template',
'NoDraft'			=>	'There are no drafts currently available.',
'InvalidDraft'		=>	'A newsletter cannot be created from that draft.',
'Summary'			=>	'Newsletter Summary',
'SubStats'			=>	'subscribers will receive this newsletter.',
'EventStats'		=>	'events will be included in this newsletter.',
'NoTemplate'		=>	'No Template Selected',
'NoTemplateB'		=>	'Template Unavailable',
'NoMessage'			=>	'No Message Set',
'NoMsgTemp'			=>	'(Not Supported by Template)',
'NewsStop'			=>	'Cannot Create Newsletter:',
//	'NewsStop1'		=>	'',
'NewsStop2'			=>	'No subscriber groups are selected.',
'NewsStop3'			=>	'No template is selected.',
'NewsStop4'			=>	'No subscribers will receive this newsletter.',
'ViewArchive'		=>	'Open Public Newsletter Archive',
'ViewArchive1'		=>	'View Archive of This Newsletter',
'Newsletter'		=>	'Newsletter',
'AllNewsLink'		=>	'Clear Search Filter',
'View'				=>	'Newsletters:',
'InProgress'		=>	'In Progress',
'Complete'			=>	'Complete',
'FilterNews'		=>	'Search Newsletters',
'FilterNewsSub'		=>	'Search Subscribers',
'NoNewsletter0'		=>	'There are no <b>In Progress</b> newsletters available.',
'NoNewsletter1'		=>	'There are no <b>Completed</b> newsletters available.',
'Created'			=>	'Created',
'Subject'			=>	'Subject',
'Count'				=>	'Count',
'ProgressLabel'		=>	'Sending Newsletter',
'Progress'			=>	'Progress:',
'Progress2'			=>	'Progress',
'Status'			=>	'Status',
'Status0'			=>	'Ready',
'Status1'			=>	'In Progress',
'Status2'			=>	'Paused',
'Status3'			=>	'Completed',
'OptInLabel'		=>	'Opt-In Confirmation Email',
'OptInNotice'		=>	'Sending an opt-in email allows the subscriber to confirm their subscription before receiving their first newsletter.<br />While this step is not required it is strongly recommended.',
'OptIn'				=>	'Opt-In:',
'OptIn1'			=>	'Send Opt-In Email to Subscriber',
'OptIn0'			=>	'Do NOT Send Opt-In Email',
'Send'				=>	'Send',
'Pause'				=>	'Pause',
'NoNewsletter'		=>	'That is an invalid newsletter or a newsletter that cannot be sent.',
'CompleteNotice'	=>	'Sending of this newsletter is complete. You can now safely navigate away from this page.',
'NoReport'			=>	'There is no report avialable for that newsletter.',
'Statistics'		=>	'Newsletter Statistics',
'ViewStats'			=>	'Inbox Views',
'ArchStats'			=>	'Archive Views',
'SentStats'			=>	'Newsletters Sent',
'MailingSize'		=>	'Mailing Size:',
'Subscribers'		=>	'Subscribers will receive this mailing.',
'AllDay'			=>	'All Day',
'TBA'				=>	'TBA',
'EditLinkTxt'		=>	'Update or Cancel Your Subscription',
'ArchiveLinkTxt'	=>	'View this in your browser.',
'Error'				=>	'Error:',
'Err01'				=>	'Template data is missing.',
'Err02'				=>	'Subscriber Data Error',
'Err03'				=>	'Email Identity Settings Missing. Cannot Send Emails.',
'Err04'				=>	'Sending email failed. Confirm mail settings.',
'EnableEditor'		=>	'Enable Editor',
'DisableEditor'		=>	'Disable Editor',
'DownloadSub'		=>	'Download Subscribers (CSV)',

//	Form Buttons
'Save'				=>	'Save Subscriber',
'SearchB'			=>	'Begin Search',
'SaveDraft'			=>	'Save Newsletter Draft',
'SendNow'			=>	'Send Now',
'StartOver'			=>	'Start Over',
'SaveTemplate'		=>	'Save Template',
'Cancel'			=>	'Cancel',
'SaveGroup'			=>	'Save Group',
'Approve0'			=>	'Approve',
'Approve1'			=>	'Approve &amp; Send Now',

//	Tooltips
'Tip01'				=>	'A description of the type of event newsletters this group will receive. Group descriptions help subscribers determine which groups they want to register for when subscribing.',
'Tip02'				=>	'Admin Only - Subscribers can only be assigned to this group by administrators. Public - Subscribers can select this group when configuring their subscription settings.',
'Tip03'				=>	'This setting will determine which default theme (Full Site or Mobile) is preset when the user clicks an event link within the newsletter.',
'Tip04'				=>	'Draft Title is used to identify the Draft within the admin console only.',
'Tip05'				=>	'Draft Subject is used as the Subject Line of emails sent to subscribers as well as to identify the newsletter within the newsletter queue and the public newsletter archive.',
'Tip06'				=>	'Adding the Newsletter to the public archive will allows site visitors to view a copy of the newsletter while browsing the public calendar.',
'Tip20'				=>	'A list of events filtered by subscriber category preferences. Event list is limited to the date range setting configured for the mailing.',
'Tip21'				=>	'A list of events currently present on the billboard (featured events), truncated based on current event list size settings.',
'Tip22'				=>	'A list of the most recently added and approved events, truncated based on current event list size settings.',
'Tip23'				=>	'A list of the most viewed active events, truncated based on current event list size settings.',
'Tip24'				=>	'A list of events for the current day (the date the mailing is sent).',
'Tip25'				=>	'A custom message, drafted when the mailing is created.',
'Tip26'				=>	'A tracking image inserted to identify when the newsletter is read. This is tracked at a newsletter level, not the subscriber level.',
'Tip27'				=>	'Subscriber first name.',
'Tip28'				=>	'Subscriber last name.',
'Tip29'				=>	'Subscriber email address.',
'Tip30'				=>	'Subscriber zip code.',
'Tip31'				=>	'Image link allowing subscribers to share newsletter on Facebook',
'Tip32'				=>	'Image link allowing subscribers to tweet about the newsletter on Twitter.',
'Tip33'				=>	'A list of the most recently updated events, truncated based on current event list size settings.',
'Tip34'				=>	'Link to the public calendar homepage.',
'Tip35'				=>	'Link to the public calendar that permits the subscriber to edit their subscription or unsubscribe. Inclusion of this variable is strongly encouraged for all templates.',
'Tip36'				=>	'Link to the online version of the newsletter within the public calendar archive.',
'Tip37'				=>	'',
'Tip38'				=>	'Current active event count.',
'Tip39'				=>	'Current location count.',
'Tip40'				=>	'Image link allowing subscribers to follow your account on Twitter. This variable will only be avialable if you have authorized Helios Calendar to access your Twitter account within the API settings.',

//	Validation
'Valid01'			=>	'Newsletter subscriber could not be added for the following reason(s):',
'Valid02'			=>	'First Name is Required',
'Valid03'			=>	'Last Name is Required',
'Valid04'			=>	'Email Address is Required',
'Valid05'			=>	'Invalid Email Address Format',
'Valid06'			=>	'Category Selection is Required',
'Valid07'			=>	'Please make the required changes and try again.',
'Valid08'			=>	'Newsletter Subscriber delete is permanent!\nAre you sure you want to delete this subscriber?',
'Valid09'			=>	'Ok = YES Delete Subscriber',
'Valid10'			=>	'Cancel = NO do NOT delete Subscriber',
'Valid11'			=>	'Last Name or Email Address is Required to Search',
'Valid12'			=>	'Draft could not be saved for the following reasons:',
'Valid13'			=>	'Start Date Cannot Occur After End Date',
'Valid14'			=>	'One or both of the selected Event Dates is earlier then today, events present in the calendar for past dates will not be included in any newsletters sent with this draft.\n\nTo save the draft with these dates click OK. To cancel and edit these dates click CANCEL.',
'Valid15'			=>	'Start Date Format is Invalid Date or Format. Required Format:',
'Valid16'			=>	'Start Date is Required',
'Valid17'			=>	'End Date Format is Invalid Date or Format. Required Format:',
'Valid18'			=>	'End Date is Required',
'Valid19'			=>	'Please make the required changes and try again.',
'Valid20'			=>	'Template delete is permanent!\nAre you sure you want to delete the template?',
'Valid21'			=>	'Ok = YES Delete Template',
'Valid22'			=>	'Cancel = NO do NOT delete Template',
'Valid23'			=>	'Your template could not be saved for the following reason(s):',
'Valid24'			=>	'Template Name is Required',
'Valid25'			=>	'Template Body is Required',
'Valid26'			=>	'Subscriber group could not be saved for the following reason(s):',
'Valid27'			=>	'Name is Required',
'Valid28'			=>	'Group Selection is Required',
'Valid29'			=>	'Draft delete is permanent!\nAre you sure you want to delete this draft?',
'Valid30'			=>	'Ok = YES Delete Draft',
'Valid31'			=>	'Cancel = NO do NOT delete Draft',
'Valid32'			=>	'Newsletter delete is permanent! This will remove the newsletter from\nthe public archive and prevent any unsent emails from being sent.\n\nAre you sure you want to delete this newsletter?',
'Valid33'			=>	'Ok = YES Delete Newsletter',
'Valid34'			=>	'Cancel = NO do NOT delete Newsletter',
'Valid35'			=>	'Are you certain you want to pause the sending of this newsletter?',
'Valid36'			=>	'Ok = YES Pause Sending',
'Valid37'			=>	'Cancel = NO Do NOT Pause Sending',
'Valid38'			=>	'Sending will pause after the current batch is completed. Please wait to navigate away from this page until the progress bar shows sending has been paused.\n\nNavigating away from this page before pausing is complete will result in some subscribers receiving duplicate newsletters.',
'Valid39'			=>	'Title is Required.',
'Valid40'			=>	'Subject is Required.',
'Valid41'			=>	'Subscribers is Required.',
'Valid42'			=>	'Subscriber Group delete is permanent!\nAre you sure you want to delete this group?',
'Valid43'			=>	'Ok = YES Delete Group',
'Valid44'			=>	'Cancel = NO do NOT delete Group',

//	Feedback
'Feed01'			=>	'Newsletter subscriber updated successfully.',
'Feed02'			=>	'Newsletter subscriber created successfully.',
'Feed03'			=>	'Email address already exists. All other updates made successfully.',
'Feed04'			=>	'Email address already exists. Newsletter subscriber not added.',
'Feed05'			=>	'Newsletter subscriber(s) deleted successfully.',
'Feed06'			=>	'Newsletter sent successfully.',
'Feed07'			=>	'Newsletter template deleted successfully.',
'Feed08'			=>	'Newsletter template updated successfully.',
'Feed09'			=>	'Newsletter template created successfully.',
'Feed10'			=>	'Subscriber Group deleted successfully.',
'Feed11'			=>	'Subscriber Group updated successfully.',
'Feed12'			=>	'Subscriber Group created successfully.',
'Feed13'			=>	'Draft updated successfully.',
'Feed14'			=>	'Draft created successfully.',
'Feed15'			=>	'Draft deleted successfully.',
'Feed16'			=>	'Newsletter was created successfully and is ready to be sent.',
'Feed17'			=>	'Newsletter deleted successfully.',
'Feed18'			=>	'Newsletter subscriber created and opt-in confirmation email sent.',
'Feed19'			=>	'Newsletter sending paused successfully.',
);	?>