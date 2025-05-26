# E-Commerce Concept
## Features
- [TOTP MFA](https://en.wikipedia.org/wiki/Time-based_one-time_password) leveraging [an open source  library](https://github.com/RobThree/TwoFactorAuth) and [composer](https://getcomposer.org/).
- Secret hiding (experimental research) using [git-secret](https://sobolevn.me/git-secret/).
  - recommend using `.env` [phpdotenv](https://github.com/vlucas/phpdotenv) instead

## Development
1. Clone the repo
2. Install [git-secret](https://sobolevn.me/git-secret/installation)
3. Collaboarte with the project admin to have your [gpg public key](https://www.devdungeon.com/content/gpg-tutorial) added to the keyring
4. Once you are added to the keyring; decrypt the secrets:
```
git secret reveal
```
5. TODO: Database migrations ...