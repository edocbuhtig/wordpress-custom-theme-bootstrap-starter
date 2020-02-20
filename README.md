## WordPress custom theme from scratch with bootstrap integration, dynamic menu & sidebar

Clone repo upload the (zip) to themes folder and activate from admin panel, create few pages, create a new menu add pages to the menu, select menu location save and browse the site.

External lib includes, as follows: 

- Bootstrap v4.4.1 (https://getbootstrap.com/)
- jQuery v3.4.1
- WP Bootstrap Navwalker (https://github.com/wp-bootstrap/wp-bootstrap-navwalker)

Last tested locally on WordPress 5.x running PHP Version 7.4.1

## Search Engine Optimization

Adding meta tags as below:

```
function theme_demo_header_metadata() {

    if ( is_page('Home') ) { 
        ?>
        
        <meta name="description" content="Free custom php wordpress theme with bootstrap">
        <meta name="keywords" content="Free custom php wordpress theme with bootstrap">
        
        <meta property="og:title" content="Free custom php wordpress theme with bootstrap "/>
        <meta property="og:image" content=""/>
        <meta property="og:description" content="Free custom php wordpress theme with bootstrap "/>
        <meta property="og:url" content="www.sunilk.work" />
        <meta property="og:type" content="article" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />
        
        
        <?php return; 
    }

  
}
add_action( 'wp_head', 'theme_demo_header_metadata' );
```

