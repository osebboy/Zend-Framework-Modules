---------------------------------------------------------------------
ALTERNATIVE MODULE BASED CONFIGURATION FOR ZEND FRAMEWORK 
---------------------------------------------------------------------
This is an alternative module based configuration for Zend Framework.
It creates completely isolated and self-contained modules
based on changing the flow of MVC structure in Zend Framework.
Please read my blog post for details pertaining this implementation.
http://www.osebboy.com/blog/module-configuration-in-zf-part-2/

HOW TO:
I assume that you already know how to create a ZF application. If you 
don't, then probably this download won't do any good to you. I suggest
you visit http://framework.zend.com/ to learn more about the framework.

* Create a ZF application as you would normally do. Then replace
application folder with the one from this download. Then add "My" folder
under library to the library folder in your file structure. Then update
the public/index.php. Make sure ZF is in your include_path.

WARNING:
If you use it, please test it for your application and make sure 
it works the way it's supposed to. Use it at your own risk. If you 
notice any errors or problems, please let me know. Feedback is always appreciated.