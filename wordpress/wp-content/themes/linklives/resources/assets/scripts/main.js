// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import singlePost from './routes/single-post';
import blog from './routes/blog';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Blog post
  singlePost,
  // Blog index
  blog,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
