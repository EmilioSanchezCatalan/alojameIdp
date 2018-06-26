<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */

/* 
 * This example shows an example config that works with G Suite (Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address
 * at G Suite. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
$metadata['google.com'] = array(
	'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
	'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
	'simplesaml.nameidattribute' => 'uid',
	'simplesaml.attributes' => FALSE,
);

$metadata['http://simplesaml.local/'] = array (
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://simplesaml.local/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
    ),
  ),
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://simplesaml.local/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    1 => 
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'http://simplesaml.local/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
    ),
    2 => 
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'http://simplesaml.local/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    3 => 
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'http://simplesaml.local/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
    ),
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'emailAddress' => 'esc00019@red.ujaen.es',
      'contactType' => 'technical',
      'givenName' => 'Administrator',
    ),
  ),
  'certData' => 'MIID4TCCAsmgAwIBAgIJAN0vdKlW2enUMA0GCSqGSIb3DQEBCwUAMIGGMQswCQYDVQQGEwJFUzENMAsGA1UECAwESmFlbjENMAsGA1UEBwwESmFlbjETMBEGA1UECgwKYWxvamFtZSBTTDEQMA4GA1UECwwHYWxvamFtZTEPMA0GA1UEAwwGRW1pbGlvMSEwHwYJKoZIhvcNAQkBFhJlc2MwMDAxOUBnbWFpbC5jb20wHhcNMTgwNTExMTUxMjI4WhcNMjgwNTEwMTUxMjI4WjCBhjELMAkGA1UEBhMCRVMxDTALBgNVBAgMBEphZW4xDTALBgNVBAcMBEphZW4xEzARBgNVBAoMCmFsb2phbWUgU0wxEDAOBgNVBAsMB2Fsb2phbWUxDzANBgNVBAMMBkVtaWxpbzEhMB8GCSqGSIb3DQEJARYSZXNjMDAwMTlAZ21haWwuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsWjvYpPqfkT+DMuGo/pqKkBEKpcpK3GSd2sDoBuRkLwVJtAewvVDyYxb3K3FNly3LHBAnOP5gkyeZgbmjht+Mjj5GCjyE4tI/AhZv9TBrNhUYb1/WL3kUCMVDgbfGXJvjrVifP4hK6c/yN67FkVJmAQ0nT8OzVBa/zBIQfhEO4P8OhukIRej124ebjlZqjyl7VyjIJPkjwYdQ2uR+je15NlblerLTrpOdP45S0pMk+UNoF7ZeH+09kGFyxueoC5lEMT0K0yRjYbI9PSJj7nAyfTeSBcJ2KSwh+xE4HQVjm2M/S75t0m2/x2UnO8qH1SKwAXuZLLTV0gsyETeDiycQwIDAQABo1AwTjAdBgNVHQ4EFgQU/4blq3jlPIL/ig85vpjNWU83pZUwHwYDVR0jBBgwFoAU/4blq3jlPIL/ig85vpjNWU83pZUwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEAkkHMVzvznkdW2XoUpjiSMfborpTrJglz0EVHEg7aKQXxX59fQvYm60mkr0yZQuIKXsQWTs79s2Uj6MMRWGQl0VdvtchU2ijYx1oNjAuCZOUI6zz95IZJ4YlC4n0CPt82fB46rWfoI8pO5gVv6Fqq9MzCATs3h7b6gNvMtx0vXRCtPWESSI+5FCHwFu6pS1kTmrLW78bqRi6kvBo49Vo3vNX8lwiBbOuo7hEZCh2lPoBAvgKvkmkUzrr+Jrn2GPhrD8y3SfYYcKUIIdcpoXhV4bUXhxfnh4xHqWMouq9negaaDHzB0qBIz58pTCearo7kyICiBk7BalLuUcP8Xl10uQ==',

);


# Nodejs SP

$metadata['http://localhost:3000/'] = array(
    'AssertionConsumerService' => 'http://localhost:3000/saml-auth/login/callback',
    'SingleLogoutService'      => 'http://localhost:3000/saml-auth/logout',
    'certData' => 'MIID4TCCAsmgAwIBAgIJAON3siz91jNtMA0GCSqGSIb3DQEBCwUAMIGGMQswCQYDVQQGEwJFUzENMAsGA1UECAwESmFlbjENMAsGA1UEBwwESmFlbjEQMA4GA1UECgwHYWxvamFtZTETMBEGA1UECwwKYWxvamFtZUFwaTEPMA0GA1UEAwwGRW1pbGlvMSEwHwYJKoZIhvcNAQkBFhJlc2MwMDAxOUBnbWFpbC5jb20wHhcNMTgwNTE0MTQzOTI4WhcNMjgwNTEzMTQzOTI4WjCBhjELMAkGA1UEBhMCRVMxDTALBgNVBAgMBEphZW4xDTALBgNVBAcMBEphZW4xEDAOBgNVBAoMB2Fsb2phbWUxEzARBgNVBAsMCmFsb2phbWVBcGkxDzANBgNVBAMMBkVtaWxpbzEhMB8GCSqGSIb3DQEJARYSZXNjMDAwMTlAZ21haWwuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt22GNqIodq5y+iPQMBhN7D+/GSuFJIVNRgXCnIXwcyhf3g78dyYUTBVMuFrgows1HTTkXS+BGRh/Muh51qqNb6eIE2uR0Zwno/na8robqgFZv0NbzW5XCqTa0G7Kj+g78IBqfQEsLrelRNW/oCSiQVXJRodCAH0tEGI612gvgpGTqQ7RrPnV9vVvoUCKuAwRR9H3bQ2ej2KqXiE33rfk4OMi6Zl2Ns59hnfAlcust61psPtE+rhy9i9uOtx06Q4lQnI+0bih2ufBzyMLcffK2dSUi5kPeXZi4ZpUF0RKa20vV+EhHvmYOfiLTKulQCMnKrzG1Fzg2oUDz84rwCVY7QIDAQABo1AwTjAdBgNVHQ4EFgQUKC5QXU/6DvLlZJsLotv7OfNOrokwHwYDVR0jBBgwFoAUKC5QXU/6DvLlZJsLotv7OfNOrokwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEAJSjJvWw6KGxpoIVYL9Iif0lYvDYn6RuFsVZo+WwAizZxE6O+UkIqCidvmoOboAvDwX4la8GNx1suPAQzT1LFu8ft15VB8vK6POiTylJ1xHXu+Hhh/4Hda2BLPwIhJ/DE6Hsp8+BFPL455JRbSbsdP+TSDEIlagprhpZNaLruFqRhOgKXgiCfSUQm2sMnvVZirMmPIDHU0jKRPOyrg6S/uZQMXfPcEMNi3Pst2mL0pNbGtXAKio06lx4U4QEqqOr+Jdctm65LV0dKwP9OWRx4LgsJe3FxbfkYskiEuU//urtLrJSBsphw13edRQAZalKx8EMlPt9LxiaqO0HkNf8qQA=='
);
