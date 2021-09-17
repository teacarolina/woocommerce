jQuery(document).ready(function()
 {
"use strict";

var menuActive = false;
var header = jQuery('.header');
setHeader();
initCustomDropdown();
initPageMenu();

function setHeader()
{

if(window.innerWidth > 991 && menuActive)
{
closeMenu();
}
}

function initCustomDropdown()
{
if(jQuery('.custom_dropdown_placeholder').length && jQuery('.custom_list').length)
{
var placeholder = jQuery('.custom_dropdown_placeholder');
var list = jQuery('.custom_list');
}

placeholder.on('click', function (ev)
{
if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}

jQuery(document).one('click', function closeForm(e)
{
if(jQuery(e.target).hasClass('clc'))
{
jQuery(document).one('click', closeForm);
}
else
{
list.removeClass('active');
}
});

});

jQuery('.custom_list a').on('click', function (ev)
{
ev.preventDefault();
var index = jQuery(this).parent().index();

placeholder.text( jQuery(this).text() ).css('opacity', '1');

if(list.hasClass('active'))
{
list.removeClass('active');
}
else
{
list.addClass('active');
}
});


jQuery('select').on('change', function (e)
{
placeholder.text(this.value);

jQuery(this).animate({width: placeholder.width() + 'px' });
});
}

/*

4. Init Page Menu

*/

function initPageMenu()
{
if(jQuery('.page_menu').length && jQuery('.page_menu_content').length)
{
var menu = jQuery('.page_menu');
var menuContent = jQuery('.page_menu_content');
var menuTrigger = jQuery('.menu_trigger');

//Open / close page menu
menuTrigger.on('click', function()
{
if(!menuActive)
{
openMenu();
}
else
{
closeMenu();
}
});

//Handle page menu
if(jQuery('.page_menu_item').length)
{
var items = jQuery('.page_menu_item');
items.each(function()
{
var item = jQuery(this);
if(item.hasClass("has-children"))
{
item.on('click', function(evt)
{
evt.preventDefault();
evt.stopPropagation();
var subItem = item.find('> ul');
if(subItem.hasClass('active'))
{
subItem.toggleClass('active');
TweenMax.to(subItem, 0.3, {height:0});
}
else
{
subItem.toggleClass('active');
TweenMax.set(subItem, {height:"auto"});
TweenMax.from(subItem, 0.3, {height:0});
}
});
}
});
}
}
}

function openMenu()
{
var menu = jQuery('.page_menu');
var menuContent = jQuery('.page_menu_content');
TweenMax.set(menuContent, {height:"auto"});
TweenMax.from(menuContent, 0.3, {height:0});
menuActive = true;
}

function closeMenu()
{
var menu = jQuery('.page_menu');
var menuContent = jQuery('.page_menu_content');
TweenMax.to(menuContent, 0.3, {height:0});
menuActive = false;
}


});