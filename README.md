Positive Modulus 
============
[![Build Status](https://api.shippable.com/projects/557eaba1edd7f2c05216a6b1/badge?branchName=master)](https://app.shippable.com/projects/557eaba1edd7f2c05216a6b1/builds/latest)

Php modulus operator `%`, when working with negative numbers will return negative results.

People with a mathematical background sometimes would expect that modulus is always positive.

That's the case when you are trying to iterate on a set of elements by decrementing the iterator, when you reach -1, 
you want the modulus operation to give you the highest number again to continue the iteration on the last element.

After some research, I found that both behaviours could be mathematically correct, so this library is for those who need 
a modulus that always returns a positive result.

##Installation
###Composer
This library is available in packagist.org, you can add it to your project via Composer.

In the "require" section of your composer.json file:

Always up to date (bleeding edge, API *not* guaranteed stable)
```javascript
"antonienko/positive-modulus": "dev-master"
```

Specific minor version, API stability
```javascript
"antonienko/positive-modulus": "0.2.*"
```

If you have any problems with the _minimum-stability_ setting try appending @dev to the version
```javascript
"antonienko/positive-modulus": "0.2.*@dev"
```

##Sample Usage
```php
PositiveModulus::calc($a, $b);
```

##License Information
Lincensed under __The MIT License (MIT)__. See the LICENSE file for more details.
