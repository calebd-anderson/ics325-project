# E-Commerce Concept
## Features
- [TOTP MFA](https://en.wikipedia.org/wiki/Time-based_one-time_password) leveraging [an open source  library](https://github.com/RobThree/TwoFactorAuth) and [composer](https://getcomposer.org/).
- Secret hiding (experimental research) using [git-secret](https://sobolevn.me/git-secret/).
  - recommend using `.env` [phpdotenv](https://github.com/vlucas/phpdotenv) instead
- [PayPal IPN](https://developer.paypal.com/api/nvp-soap/ipn/IPNIntro/) integration
- [Stripe](https://stripe.com/) payment integration

## Development
1. Clone [the repo](https://github.com/calebd-anderson/ics325-project).

### git-secret
2. Install [git-secret](https://sobolevn.me/git-secret/installation).
3. Collaboarte with the project admin to have your [gpg public key](https://docs.github.com/en/authentication/managing-commit-signature-verification/generating-a-new-gpg-key) added to the keyring.
> [!NOTE]  
> Review [using gpg](https://sobolevn.me/git-secret/#using-gpg) for steps on generating a key-pair, exporting the public key and transfering the public key.
```
git secret tell email@address.id
```
4. Once you are added to the keyring - decrypt the secrets:
```
git secret reveal
```
  - After modifying any of the following source files:

>SQLcreds.inc  
u_nameavaildbctrl.php  
public_html/membership/stripe/config.php  
public_html/account/sign_in_form.php  
public_html/membership/paypal/DBController.php  
public_html/membership/stripe/DBController.php  

Run:
```
git secret hide
```
Then commit the encrypted files.
```
git commit -a
```

### Setup XAMPP
1. Download [XAMPP](https://www.apachefriends.org/).
2. Follow the `Configure Virtual Hosts` How-To Guide `C:/xampp/htdocs/dashboard/docs/configure-vhosts.pdf`.

### Setup MySQL database
1. TODO