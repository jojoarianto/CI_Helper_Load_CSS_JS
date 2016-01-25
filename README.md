# CI Helper Load CSS and JS
This is simple helper to help you generate css and js laoder function via contoller into your view. 

### Installation
- First, copy and paste all function in file my_helper.php into your helper. You can merge it with your previous helper or create a new helper.
- Second, put this code to your view (you can place it in your header.php or footer.php) 
```html
    <!-- custom css and js -->
    <?php echo loadCssPreHeader() ?>
    <?php echo loadJsPreHeader() ?>
```
- Next, just call setCssPreHeader or setJsPreHeader in your CI Controller. example
```php
    public function index(){
        <!-- set css and js to load -->
        setJsPreHeader(base_url() . 'assets/js/login.js');
        setCssPreHeader(base_url() . 'assets/css/login.css');        

        <!-- below is your code -->
        $this->load->view('header');
    }
```

### Output
Output in your view will be like this
```html
    <!-- custom css and js-->
    <script src="http://localhost/tryout/assets/js/login.js"></script> 
    <link href="http://localhost/tryout/assets/css/login.css" rel="stylesheet">
```
### Thank you