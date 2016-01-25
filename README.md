# CI Helper Load CSS and JS
This is simple helper to help you generated css and js loader via contoller into your view. 

# Instalation
- First, copy and paste the all of function in file my_helper.php to your helper. You can merge with your helper previously or create a new helper.
- Second, put this code to your view (you can place it in your header.php or footer.php) 
```html
    <!-- custom css and js -->
    <?php echo loadCssPreHeader() ?>
    <?php echo loadJsPreHeader() ?>
```
- Next, just call setCssPreHeader or setJsPreHeader in your CI Controller. example
```php
    public function index(){
        setJsPreHeader(base_url() . 'assets/js/login.js');
        setCssPreHeader(base_url() . 'assets/css/login.css');        
```

# Output
Output in your view will be like this
```html
    <!-- custom css and js-->
    <script src="http://localhost/tryout/assets/js/login.js"></script> 
    <link href="http://localhost/tryout/assets/css/login.css" rel="stylesheet">
```
### Thank you