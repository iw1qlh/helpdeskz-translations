<?php
return [
    'configuration' => 'API Configuration',
    'token' => 'API Token',
    'name' => 'API Name',
    'new' => 'New API',
    'edit' => 'Edit API',
    'ipAllowed' => 'IP addresses allowed (separated by commas)',
    'ipAllowedDescription' => 'Leave empty to accept any IP or like this: 127.0.0.1, 127.0.0.*, 201.127.*.*',
    'generateToken' => 'Generate new API token',
    'permissions' => 'API permissions',
    'successCreation' => 'API has been successfully created.',
    'successUpdate' => 'API has been successfully updated.',
    'removeConfirm' => 'Do you really want to remove this API?',
    'apiRemoved' => 'API was removed.',
    'userCreated' => 'User account was created.',
    'emailChanged' => 'Email was changed.',
    'userRemoved' => 'User account was removed.',
    'departmentCreated' => 'Department was created.',
    'departmentUpdated' => 'Department was updated.',
    'departmentRemoved' => 'Department and its tickets were removed.',
    'ticketCreated' => 'Ticket was created.',
    'ticketUpdated' => 'Ticket was updated.',
    'ticketRemoved' => 'Ticket was removed.',
    'messageCreated' => 'Message was created and added to ticket.',
    'attachmentRemoved' => 'File was removed from servers.',
    'accountLoggedIn' => 'You have been logged in.',
    'error' => [
        'apiName' => 'Enter your API name.',
        'invalidStatus' => 'API status is not valid.',
        'invalidID' => 'API ID is not valid.',
        'authentication' => 'Authentication is not valid.',
        'ipAllowed' => 'IP address `%ip% is not allowed.',
        'noAllowed' => 'Permission not allowed:',
        'fullNameMissing' => 'Full name is missing.',
        'emailMissing' => 'Email address is missing.',
        'emailNotValid' => 'Email address is not valid.',
        'emailTaken' => 'Email address is already in use.',
        'userNotFound' => 'User not found.',
        'pageNotFound' => 'Page not found.',
        'departmentMissing' => 'Department name is missing.',
        'departmentTypeMissing' => 'Department type is missing.',
        'departmentType' => 'Department type must be 0 or 1',
        'departmentNotFound' => 'Department not found.',
        'openerMissing' => 'Opener is missing.',
        'openerInvalid' => 'Opener is not valid.',
        'userIdMissing' => 'User ID is missing.',
        'userIdNotValid' => 'User ID is not valid.',
        'userIdNotFound' => 'User ID not found.',
        'staffIdMissing' => 'Staff ID is missing.',
        'staffIdNotValid' => 'Staff ID is not valid.',
        'staffIdNotFound' => 'Staff ID not found.',
        'departmentIdMissing' => 'Department ID is missing.',
        'departmentIdNotValid' => 'Department ID is not valid.',
        'departmentIdNotFound' => 'Department ID not found.',
        'subjectMissing' => 'Subject is missing.',
        'bodyMissing' => 'Body is missing.',
        'fileNotAllowed' => 'File is not allowed.',
        'fileIsBig' => 'File is too big. Maximum size is %size%.',
        'statusIdNotValid' => 'Status ID is not valid.',
        'ticketNotFound' => 'Ticket not found.',
        'ticketIdMissing' => 'Ticket ID is missing.',
        'messageMissing' => 'Message is missing.',
        'replierMissing' => 'Replier is missing.',
        'replierNotValid' => 'Replier is not valid.',
        'attachmentNotFound' => 'Attachment not found.',
        'usernameMissing' => 'Username is missing.',
        'usernameNotValid' => 'Username is not valid.',
        'passwordMissing' => 'Password is missing.',
        'ipMissing' => 'IP address is missing.',
        'ipNotValid' => 'IP address is not valid.',
        'accountLocked' => 'Account locked for %n% minutes.',
        'attemptCount' => '(%1% of %2% attempts)',
        'invalidUsernamePassword' => 'Username or password is not valid.',
        'accountNotActive' => 'Account is locked.',
        'twoFactorMissing' => 'Two-factor code is missing.',
        'twoFactorNotValid' => 'Two-factor authentication failed.'
    ],
    'permissionsList' => [
        'users' => 'Users',
        'users_create' => 'Create users.',
        'users_read' => 'Get list/details of users.',
        'users_update' => 'Update users.',
        'users_delete' => 'Delete users.',
        'departments' => 'Departments',
        'departments_create' => 'Create departments.',
        'departments_read' => 'Get list/details of departments.',
        'departments_update' => 'Update departments.',
        'departments_delete' => 'Delete departments.',
        'tickets' => 'Support tickets',
        'tickets_create' => 'Create tickets.',
        'tickets_read' => 'Get list/details of tickets.',
        'tickets_update' => 'Update ticket status or department.',
        'tickets_delete' => 'Delete tickets.',
        'messages' => 'Ticket messages',
        'messages_create' => 'Add a message to ticket.',
        'messages_read' => 'Get messages from a ticket.',
        'attachments' => 'Attachments',
        'attachments_read' => 'Get list/details of attachments.',
        'attachments_download' => 'Get file content from an attachment.',
        'attachments_delete' => 'Delete attachments.',
        'staff' => 'Staff Users',
        'staff_read' => 'Get information/details of staff users.',
        'staff_auth' => 'Validate staff authentication.'
    ]
];