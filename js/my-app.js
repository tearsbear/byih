var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'BYIH',
  // App id
  id: 'com.byih.app',
  //Theme
  theme: 'ios',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
   navbar: {
    hideOnPageScroll: true,
    iosCenterTitle: true,
  },
  toolbar: {
    hideOnPageScroll: true,
  },
  lazy: {
    sequential: true,
  },
  // Add default routes
  routes: [
    {
      name: 'login',
      path: '/login/',
      url: 'login.php',
    },
  ],
  // ... other parameters
});

var $$ = Dom7;