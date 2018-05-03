You can name a file page-foo.php and if one of your pages slugs is /foo/ it will take the template you created and build it with page-foo.php.

The problem is that you/clients can change that page's slug. 
  ex: wordpress101/foo/ is changed to wordpress101/foo-bar/

  now page-foo.php no longer works.

So instead you can use the page ID and connect the page template to that.
WordPress pages have unique ID's that cannot be changed. So this is the best solution to creating a page template without relying on a pages changeable slug.