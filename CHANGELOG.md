# Recurly PHP Client Library CHANGELOG

## Version 2.0.3 (November 9, 2011)

* Use rawurlencode() instead of urlencode() to create resource URLs. Required for URLs that contain spaces
* Raise Recurly_ValidationError for 422 instead of Recurly_RequestError. Bug introduced in earlier commit today

## Version 2.0.2 (November 9, 2011)

* Fix Recurly_InvoiceList::getForAccount(), SubscriptionList::getForAccount()
* Interpret 4xx as request errors and 5xx as server errors for future error codes

## Version 2.0.1 (November 2, 2011)

* Include method to retrieve invoice as PDF

Merged fixes from beaudesigns:

* Replaced static class to DomDocument::loadXML()
* "pending_subscription" now loads class Recurly_Subscription
* Fixed references to $this that should have been local scopes

## Version 2.0.0 (October 18, 2011)

* Full rewrite for API v2
