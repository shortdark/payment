# payment
This is a very quick test to show a mockup of a payment form. I have just uploaded the files that are added/modified for this project in a default Laravel installation (Laravel 5.5, I believe). 

# Notes
* I just used the quickest Stripe popup form of their API, as opposed to making a custom form. 
* I did not want to put my Stripe info on a public Github repository so I have modified the public and private parts of the stripe token.
* I would say that the look of the item page is pretty close to what I was aiming for but the CSS could definitely be tidied up, at the very least. 
* The async stuff on the stylesheet works on Chrome but stops the Twitter Bootstrap from working on Firefox, so that should be changed back to just a normal CSS tag, i.e. change "preload" to "stylesheet".
* I have not used a blade templating system for this demo, but that would definitely be something that would be needed for re-usability. 
* I've just dumped the images in the "images" folder in "public", ideally they would be arranged slightly better than this. 
* The Laravel/PHP is simple but I used a repository with an interface. 
* The interface could be re-used for a paypal implementation.
