## PasteVault - Email lives forever, passwords in email shouldn't

**Critical Note - PasteVault must be served over SSL. Even though it encrypts the text client side, without serving the javascript that does this over SSL it could be interfered with and expose the users data.**

PasteVault is an application to allow the creation of temporary text notes which are encrypted in browser and stored on a server with an expiration. A unique link is generated and that link can be shared for up to the expiration period. With the link, plus the password the text can be decoded. This is perfect for sending confidential information into a help desk or over email. Not using such a tool means your password, url, address, etc is stored forever in the help desk tool or email system.

[PasteVault.com](https://www.pastevault.com) is available already, this is the source code for that site should you want to run your own in house instance of PasteVault.

### Installation

PasteVault works pretty much out of the box. There are a few environmental variables you should set. The **appkey is required**. 

PV_APPKEY "secret key for encrypting stuff";

PV_COMPANY "Company, Inc";

PV_GOOGLE_STATS "UA-XXXXXX";

The Laravel /storage directory must be writable

### Storage

PasteVault defaults to storing the texts via Laravel's Cache system to file. You could change this to MySQL or one of the other options via configuration.

### PasteVault License

PasteVault is open-sourced software licensed under the MIT License.

### PasteVault Copyright

The name PasteVault and PasteVault.com as well as the logo are copyright UserScape, Inc.

### Stanford Javascript Crypto Library License

The Stanford Javascript Crypto Library is distributed under the terms of the BSD

### Use at your own risk!

This is something I hacked together in a few hours. It's suffecient for sending stuff you'd rather not have stored forever in an email client or help desk app. Use at your own risk.