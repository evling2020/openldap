<?php // My SSP configuration
## Questions/answers
# Use questions/answers?
$use_questions = false;

# LDAP
$ldap_url = "ldap://app";
$ldap_starttls = false;
$ldap_binddn = "cn=admin,dc=evling,dc=tech";
$ldap_bindpw = 'T3h3x18iXeAVGCT3';
// for GSSAPI authentication, comment out ldap_bind* and uncomment ldap_krb5ccname lines
//$ldap_krb5ccname = "/path/to/krb5cc";
$ldap_base = "ou=users,dc=evling,dc=tech";
$ldap_login_attribute = "uid";
$ldap_fullname_attribute = "cn";
$ldap_filter = "(&(objectClass=inetOrgPerson)($ldap_login_attribute={login}))";
$ldap_use_exop_passwd = false;
$ldap_use_ppolicy_control = false;

# Reset URL (mandatory)
#$reset_url = "http://ssp.example.com/";
# If inside a virtual host
$reset_url = ($_SERVER['HTTPS'] ? "https" : "http") . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
# If behind a reverse proxy with a virtual host
#$reset_url = $_SERVER['HTTP_X_FORWARDED_PROTO'] . "://" . $_SERVER['HTTP_X_FORWARDED_HOST'] . $_SERVER['SCRIPT_NAME'];

## Mail
# LDAP mail attribute
$mail_attributes = array( "mail", "gosaMailAlternateAddress", "proxyAddresses" );
# Get mail address directly from LDAP (only first mail entry)
# and hide mail input field
# default = false
$mail_address_use_ldap = false;
# Who the email should come from
$mail_from = "admin@example.com";
$mail_from_name = "Self Service Password";
$mail_signature = "";
# Notify users anytime their password is changed
$notify_on_change = false;
# PHPMailer configuration (see https://github.com/PHPMailer/PHPMailer)
$mail_sendmailpath = '/usr/sbin/sendmail';
$mail_protocol = 'smtp';
$mail_smtp_debug = 0;
$mail_debug_format = 'error_log';
$mail_smtp_host = 'localhost';
$mail_smtp_auth = false;
$mail_smtp_user = '';
$mail_smtp_pass = '';
$mail_smtp_port = 25;
$mail_smtp_timeout = 30;
$mail_smtp_keepalive = false;
$mail_smtp_secure = 'tls';
$mail_smtp_autotls = true;
$mail_smtp_options = array();
$mail_contenttype = 'text/plain';
$mail_wordwrap = 0;
$mail_charset = 'utf-8';
$mail_priority = 3;

## SMS
# Use sms
$use_sms = false;

$keyphrase = "5C6fFdvhGu8KVuQQ";
$debug = false;
?>
