# PHP Wrapper Class for Poloniex API
### Description:
Class contains a variety of classes for interacting with both the public and trading API. Capable of retrieving current and historic market data as well as executing trades and interacting with an account.
### Dependencies:
The only dependencies for this class involve creating private and secret API keys from a user's account on the Poloniex website.
### Credits:
This is an adapted version of Poloniex's recommended PHP wrapper class created by Compcentral - [link here](https://pastebin.com/iuezwGRZ)
### Revised Version Author Notes:
As noted above, the original author (Compcentral) created the foundation and groundwork for this code. However, Compcentral's version did not include all of the functionality provided by the Poloniex API. Most notably, the functionalities for margin trading, lending, and account balance/address information were not included. I simply expanded upon Compcentral's work with additional functions to incorporate more of the functionality provided by the Poloniex API (a list of my additions/edits can be found as a comment at the top of the class file).


The full documentation for the API can be found [here](https://poloniex.com/support/api/)


### TODO:
- [ ] Add functions for margin loans
- [ ] Add functions for finding and creating deposit addresses
- [ ] Add functions for detailed balance info (including ability to specify a single currency)
