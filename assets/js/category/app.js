/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Bootstrap 5
Version: 5.3.2
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
	----------------------------
		APPS CONTENT TABLE
	----------------------------

	<!-- ======== GLOBAL SCRIPT SETTING ======== -->
	02. Handle Theme Panel Expand
	03. Handle Get Css Variable

	<!-- ======== APPLICATION SETTING ======== -->
	Application Controller
*/

var app = {
	id: '#app',
	class: 'app',
	isMobile: ((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) || window.innerWidth < 767),
	darkMode: {
		attr: 'data-bs-theme',
		value: 'dark',
		eventName: 'theme-reload'
	},
	themePanel: {
		class: 'theme-panel',
		toggleAttr: 'data-toggle="theme-panel-expand"',
		cookieName: 'theme-panel-expand',
		activeClass: 'active',
		themeListCLass: 'theme-list',
		themeListItemCLass: 'theme-list-item',
		theme: {
			toggleAttr: 'data-toggle="theme-selector"',
			cookieName: 'app-theme',
			activeClass: 'active',
			classAttr: 'data-theme-class'
		},
		themeDarkMode: {
			class: 'dark-mode',
			toggleAttr: 'name="app-theme-dark-mode"',
			cookieName: 'app-theme-dark-mode'
		},
	},
	font: {},
	color: {},
	variablePrefix: 'bs-',
	variableFontList: ['body-font-family', 'body-font-size', 'body-font-weight', 'body-line-height'],
	variableColorList: [
		'theme', 'theme-rgb', 'theme-color', 'theme-color-rgb',
		'component-color', 'component-color-rgb', 'component-bg', 'component-bg-rgb',
		'component-secondary-bg', 'component-bg-rgb', 'component-tertiary-bg', 'component-tertiary-bg-rgb',
		'default', 'default-rgb',
		'primary', 'primary-rgb', 'primary-bg-subtle', 'primary-text', 'primary-border-subtle',
		'secondary', 'secondary-rgb', 'secondary-bg-subtle', 'secondary-text', 'secondary-border-subtle',
		'success', 'success-rgb', 'success-bg-subtle', 'success-text', 'success-border-subtle',
		'warning', 'warning-rgb', 'warning-bg-subtle', 'warning-text', 'warning-border-subtle',
		'info', 'info-rgb', 'info-bg-subtle', 'info-text', 'info-border-subtle',
		'danger', 'danger-rgb', 'danger-bg-subtle', 'danger-text', 'danger-border-subtle',
		'light', 'light-rgb', 'light-bg-subtle', 'light-text', 'light-border-subtle',
		'dark', 'dark-rgb', 'dark-bg-subtle', 'dark-text', 'dark-border-subtle',
		'black', 'black-rgb',
		'blue', 'blue-rgb', 
		'inverse', 'inverse-rgb',
		'white', 'white-rgb',
		'red', 'red-rgb', 
		'teal', 'teal-rgb',
		'indigo', 'indigo-rgb', 
		'orange', 'orange-rgb', 
		'purple', 'purple-rgb',
		'yellow', 'yellow-rgb',
		'green', 'green-rgb',
		'pink', 'pink-rgb',
		'cyan', 'cyan-rgb',
		'gray', 'gray-rgb',
		'lime', 'lime-rgb',
		'gray-100', 'gray-200', 'gray-300', 'gray-400', 'gray-500',  'gray-600', 'gray-700', 'gray-800', 'gray-900', 
		'gray-100-rgb', 'gray-200-rgb', 'gray-300-rgb', 'gray-400-rgb', 'gray-500-rgb',  'gray-600-rgb', 'gray-700-rgb', 'gray-800-rgb', 'gray-900-rgb', 
		'muted', 'muted-rgb', 'emphasis-color', 'emphasis-color-rgb',
		'heading-color', 
		'body-bg', 'body-bg-rgb', 'body-color', 'body-color-rgb',
		'secondary-color', 'secondary-color-rgb', 'secondary-bg', 'secondary-bg-rgb',
		'tertiary-color', 'tertiary-color-rgb', 'tertiary-bg', 'tertiary-bg-rgb',
		'link-color', 'link-color-rgb', 'link-hover-color', 'link-hover-color-rgb', 
		'border-color', 'border-color-translucent'
	],
	breakpoints: {
		xs: 0,
		sm: 576,
		md: 768,
		lg: 992,
		xl: 1200,
		xxl: 1400,
		xxxl: 1800
	}
}

var slideUp = function(elm, duration = app.animation.speed) {
	if (!elm.classList.contains('transitioning')) {
		elm.classList.add('transitioning');
		elm.style.transitionProperty = 'height, margin, padding';
		elm.style.transitionDuration = duration + 'ms';
		elm.style.boxSizing = 'border-box';
		elm.style.height = elm.offsetHeight + 'px';
		elm.offsetHeight;
		elm.style.overflow = 'hidden';
		elm.style.height = 0;
		elm.style.paddingTop = 0;
		elm.style.paddingBottom = 0;
		elm.style.marginTop = 0;
		elm.style.marginBottom = 0;
		window.setTimeout( () => {
			elm.style.display = 'none';
			elm.style.removeProperty('height');
			elm.style.removeProperty('padding-top');
			elm.style.removeProperty('padding-bottom');
			elm.style.removeProperty('margin-top');
			elm.style.removeProperty('margin-bottom');
			elm.style.removeProperty('overflow');
			elm.style.removeProperty('transition-duration');
			elm.style.removeProperty('transition-property');
			elm.classList.remove('transitioning');
		}, duration);
	}
};

var slideDown = function(elm, duration = app.animation.speed) {
	if (!elm.classList.contains('transitioning')) {
		elm.classList.add('transitioning');
		elm.style.removeProperty('display');
		let display = window.getComputedStyle(elm).display;
		if (display === 'none') display = 'block';
		elm.style.display = display;
		let height = elm.offsetHeight;
		elm.style.overflow = 'hidden';
		elm.style.height = 0;
		elm.style.paddingTop = 0;
		elm.style.paddingBottom = 0;
		elm.style.marginTop = 0;
		elm.style.marginBottom = 0;
		elm.offsetHeight;
		elm.style.boxSizing = 'border-box';
		elm.style.transitionProperty = "height, margin, padding";
		elm.style.transitionDuration = duration + 'ms';
		elm.style.height = height + 'px';
		elm.style.removeProperty('padding-top');
		elm.style.removeProperty('padding-bottom');
		elm.style.removeProperty('margin-top');
		elm.style.removeProperty('margin-bottom');
		window.setTimeout( () => {
			elm.style.removeProperty('height');
			elm.style.removeProperty('overflow');
			elm.style.removeProperty('transition-duration');
			elm.style.removeProperty('transition-property');
			elm.classList.remove('transitioning');
		}, duration);
	}
};

var slideToggle = function(elm, duration = app.animation.speed) {
	if (window.getComputedStyle(elm).display === 'none') {
		return slideDown(elm, duration);
	} else {
		return slideUp(elm, duration);
	}
};

var setCookie = function(cookieName, cookieValue) {
	var now = new Date();
  var time = now.getTime();
  var expireTime = time + 1000*36000;
  now.setTime(expireTime);
  document.cookie = cookieName + '='+ cookieValue +';expires='+now.toUTCString()+';path=/';
};

var getCookie = function(cookieName) {
  let name = cookieName + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
};


/* 01. Handle Theme Panel
------------------------------------------------ */
var handleThemePanel = function() {
	// Theme Panel - Toggle / Dismiss
	var elm = document.querySelector('['+ app.themePanel.toggleAttr +']');
	if (elm) {
		elm.onclick = function(e) {
			e.preventDefault();
			var target = document.querySelector('.'+ app.themePanel.class);
			var targetExpand = (target.classList.contains(app.themePanel.activeClass)) ? false : true;
			
			target.classList.toggle(app.themePanel.activeClass);
			setCookie(app.themePanel.cookieName, targetExpand);
		}
	}
	
	// Theme Panel - Theme Selector
	var elms = [].slice.call(document.querySelectorAll('.'+ app.themePanel.class +' ['+ app.themePanel.theme.toggleAttr +']'));
	if (elms) {
		elms.map(function(elm) {
			elm.onclick = function() {
				var targetThemeClass = this.getAttribute(app.themePanel.theme.classAttr);
				for (var x = 0; x < document.body.classList.length; x++) {
					var targetClass = document.body.classList[x];
					if (targetClass.search('theme-') > -1) {
						document.body.classList.remove(targetClass);
					}
				}
				if (targetThemeClass) {
					document.body.classList.add(targetThemeClass);
				}
			
				var togglers = [].slice.call(document.querySelectorAll('.'+ app.themePanel.class +' ['+ app.themePanel.theme.toggleAttr +']'));
				togglers.map(function(toggler) {
					if (toggler != elm) {
						toggler.closest('.'+ app.themePanel.themeListItemCLass).classList.remove(app.themePanel.theme.activeClass);
					} else {
						toggler.closest('.'+ app.themePanel.themeListItemCLass).classList.add(app.themePanel.theme.activeClass);
					}
				});
				setCookie(app.themePanel.theme.cookieName, targetThemeClass);
			}
		});
	}
	
	
	// Theme Panel - Dark Mode
	var elms = [].slice.call(document.querySelectorAll('.'+ app.themePanel.class +' ['+ app.themePanel.themeDarkMode.toggleAttr +']'));
	elms.map(function(elm) {
		elm.onchange = function() {
			if (this.checked) {
				document.querySelector('html').setAttribute(app.darkMode.attr, app.darkMode.value);
			} else {
				document.querySelector('html').removeAttribute(app.darkMode.attr);
			}
			App.initVariable();
			setCookie(app.themePanel.themeDarkMode.cookieName, (this.checked) ? app.themePanel.themeDarkMode.class : '');
			document.dispatchEvent(new CustomEvent(app.darkMode.eventName));
		}
	});
	
	
	if (getCookie(app.themePanel.cookieName) && getCookie(app.themePanel.cookieName) == 'true') {
		var elm = document.querySelector('.'+ app.themePanel.class +' ['+ app.themePanel.toggleAttr +']');
		if (elm) {
			elm.click();
		}
	}
	if (getCookie(app.themePanel.theme.cookieName)) {
		var elm = document.querySelector('.'+ app.themePanel.class +' ['+ app.themePanel.theme.toggleAttr +']['+ app.themePanel.theme.classAttr +'="'+ getCookie(app.themePanel.theme.cookieName) +'"]');
		if (elm) {
			elm.click();
		}
	}
	if (getCookie(app.themePanel.themeDarkMode.cookieName)) {
		var elm = document.querySelector('.'+ app.themePanel.class +' ['+ app.themePanel.themeDarkMode.toggleAttr +']');
		if (elm) {
			elm.checked = true;
			elm.onchange();
		}
	}
};


/* 02. Handle Get Css Variable
------------------------------------------------ */
var handleCssVariable = function() {
	var rootStyle = getComputedStyle(document.body);
	
	// font
	if (app.variableFontList && app.variablePrefix) {
		for (var i = 0; i < (app.variableFontList).length; i++) {
			app.font[app.variableFontList[i].replace(/-([a-z|0-9])/g, (match, letter) => letter.toUpperCase())] = rootStyle.getPropertyValue('--'+ app.variablePrefix + app.variableFontList[i]).trim();
		}
	}
	
	// color
	if (app.variableColorList && app.variablePrefix) {
		for (var i = 0; i < (app.variableColorList).length; i++) {
			app.color[app.variableColorList[i].replace(/-([a-z|0-9])/g, (match, letter) => letter.toUpperCase())] = rootStyle.getPropertyValue('--'+ app.variablePrefix + app.variableColorList[i]).trim();
		}
	}
};


/* Application Controller
------------------------------------------------ */
var App = function () {
	"use strict";
	
	return {
		//main function
		init: function () {
			handleThemePanel();
			
			this.initVariable();
		},
		initVariable: function() {
			handleCssVariable();
		}
	};
}();

$(document).ready(function() {
	App.init();
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHAubWluLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcclxuVGVtcGxhdGUgTmFtZTogQ29sb3IgQWRtaW4gLSBSZXNwb25zaXZlIEFkbWluIERhc2hib2FyZCBUZW1wbGF0ZSBidWlsZCB3aXRoIEJvb3RzdHJhcCA1XHJcblZlcnNpb246IDUuMy4yXHJcbkF1dGhvcjogU2VhbiBOZ3VcclxuV2Vic2l0ZTogaHR0cDovL3d3dy5zZWFudGhlbWUuY29tL2NvbG9yLWFkbWluL1xyXG5cdC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuXHRcdEFQUFMgQ09OVEVOVCBUQUJMRVxyXG5cdC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuXHJcblx0PCEtLSA9PT09PT09PSBHTE9CQUwgU0NSSVBUIFNFVFRJTkcgPT09PT09PT0gLS0+XHJcblx0MDIuIEhhbmRsZSBUaGVtZSBQYW5lbCBFeHBhbmRcclxuXHQwMy4gSGFuZGxlIEdldCBDc3MgVmFyaWFibGVcclxuXHJcblx0PCEtLSA9PT09PT09PSBBUFBMSUNBVElPTiBTRVRUSU5HID09PT09PT09IC0tPlxyXG5cdEFwcGxpY2F0aW9uIENvbnRyb2xsZXJcclxuKi9cclxuXHJcbnZhciBhcHAgPSB7XHJcblx0aWQ6ICcjYXBwJyxcclxuXHRjbGFzczogJ2FwcCcsXHJcblx0aXNNb2JpbGU6ICgoL0FuZHJvaWR8d2ViT1N8aVBob25lfGlQYWR8aVBvZHxCbGFja0JlcnJ5fElFTW9iaWxlfE9wZXJhIE1pbmkvaS50ZXN0KG5hdmlnYXRvci51c2VyQWdlbnQpKSB8fCB3aW5kb3cuaW5uZXJXaWR0aCA8IDc2NyksXHJcblx0ZGFya01vZGU6IHtcclxuXHRcdGF0dHI6ICdkYXRhLWJzLXRoZW1lJyxcclxuXHRcdHZhbHVlOiAnZGFyaycsXHJcblx0XHRldmVudE5hbWU6ICd0aGVtZS1yZWxvYWQnXHJcblx0fSxcclxuXHR0aGVtZVBhbmVsOiB7XHJcblx0XHRjbGFzczogJ3RoZW1lLXBhbmVsJyxcclxuXHRcdHRvZ2dsZUF0dHI6ICdkYXRhLXRvZ2dsZT1cInRoZW1lLXBhbmVsLWV4cGFuZFwiJyxcclxuXHRcdGNvb2tpZU5hbWU6ICd0aGVtZS1wYW5lbC1leHBhbmQnLFxyXG5cdFx0YWN0aXZlQ2xhc3M6ICdhY3RpdmUnLFxyXG5cdFx0dGhlbWVMaXN0Q0xhc3M6ICd0aGVtZS1saXN0JyxcclxuXHRcdHRoZW1lTGlzdEl0ZW1DTGFzczogJ3RoZW1lLWxpc3QtaXRlbScsXHJcblx0XHR0aGVtZToge1xyXG5cdFx0XHR0b2dnbGVBdHRyOiAnZGF0YS10b2dnbGU9XCJ0aGVtZS1zZWxlY3RvclwiJyxcclxuXHRcdFx0Y29va2llTmFtZTogJ2FwcC10aGVtZScsXHJcblx0XHRcdGFjdGl2ZUNsYXNzOiAnYWN0aXZlJyxcclxuXHRcdFx0Y2xhc3NBdHRyOiAnZGF0YS10aGVtZS1jbGFzcydcclxuXHRcdH0sXHJcblx0XHR0aGVtZURhcmtNb2RlOiB7XHJcblx0XHRcdGNsYXNzOiAnZGFyay1tb2RlJyxcclxuXHRcdFx0dG9nZ2xlQXR0cjogJ25hbWU9XCJhcHAtdGhlbWUtZGFyay1tb2RlXCInLFxyXG5cdFx0XHRjb29raWVOYW1lOiAnYXBwLXRoZW1lLWRhcmstbW9kZSdcclxuXHRcdH0sXHJcblx0fSxcclxuXHRmb250OiB7fSxcclxuXHRjb2xvcjoge30sXHJcblx0dmFyaWFibGVQcmVmaXg6ICdicy0nLFxyXG5cdHZhcmlhYmxlRm9udExpc3Q6IFsnYm9keS1mb250LWZhbWlseScsICdib2R5LWZvbnQtc2l6ZScsICdib2R5LWZvbnQtd2VpZ2h0JywgJ2JvZHktbGluZS1oZWlnaHQnXSxcclxuXHR2YXJpYWJsZUNvbG9yTGlzdDogW1xyXG5cdFx0J3RoZW1lJywgJ3RoZW1lLXJnYicsICd0aGVtZS1jb2xvcicsICd0aGVtZS1jb2xvci1yZ2InLFxyXG5cdFx0J2NvbXBvbmVudC1jb2xvcicsICdjb21wb25lbnQtY29sb3ItcmdiJywgJ2NvbXBvbmVudC1iZycsICdjb21wb25lbnQtYmctcmdiJyxcclxuXHRcdCdjb21wb25lbnQtc2Vjb25kYXJ5LWJnJywgJ2NvbXBvbmVudC1iZy1yZ2InLCAnY29tcG9uZW50LXRlcnRpYXJ5LWJnJywgJ2NvbXBvbmVudC10ZXJ0aWFyeS1iZy1yZ2InLFxyXG5cdFx0J2RlZmF1bHQnLCAnZGVmYXVsdC1yZ2InLFxyXG5cdFx0J3ByaW1hcnknLCAncHJpbWFyeS1yZ2InLCAncHJpbWFyeS1iZy1zdWJ0bGUnLCAncHJpbWFyeS10ZXh0JywgJ3ByaW1hcnktYm9yZGVyLXN1YnRsZScsXHJcblx0XHQnc2Vjb25kYXJ5JywgJ3NlY29uZGFyeS1yZ2InLCAnc2Vjb25kYXJ5LWJnLXN1YnRsZScsICdzZWNvbmRhcnktdGV4dCcsICdzZWNvbmRhcnktYm9yZGVyLXN1YnRsZScsXHJcblx0XHQnc3VjY2VzcycsICdzdWNjZXNzLXJnYicsICdzdWNjZXNzLWJnLXN1YnRsZScsICdzdWNjZXNzLXRleHQnLCAnc3VjY2Vzcy1ib3JkZXItc3VidGxlJyxcclxuXHRcdCd3YXJuaW5nJywgJ3dhcm5pbmctcmdiJywgJ3dhcm5pbmctYmctc3VidGxlJywgJ3dhcm5pbmctdGV4dCcsICd3YXJuaW5nLWJvcmRlci1zdWJ0bGUnLFxyXG5cdFx0J2luZm8nLCAnaW5mby1yZ2InLCAnaW5mby1iZy1zdWJ0bGUnLCAnaW5mby10ZXh0JywgJ2luZm8tYm9yZGVyLXN1YnRsZScsXHJcblx0XHQnZGFuZ2VyJywgJ2Rhbmdlci1yZ2InLCAnZGFuZ2VyLWJnLXN1YnRsZScsICdkYW5nZXItdGV4dCcsICdkYW5nZXItYm9yZGVyLXN1YnRsZScsXHJcblx0XHQnbGlnaHQnLCAnbGlnaHQtcmdiJywgJ2xpZ2h0LWJnLXN1YnRsZScsICdsaWdodC10ZXh0JywgJ2xpZ2h0LWJvcmRlci1zdWJ0bGUnLFxyXG5cdFx0J2RhcmsnLCAnZGFyay1yZ2InLCAnZGFyay1iZy1zdWJ0bGUnLCAnZGFyay10ZXh0JywgJ2RhcmstYm9yZGVyLXN1YnRsZScsXHJcblx0XHQnYmxhY2snLCAnYmxhY2stcmdiJyxcclxuXHRcdCdibHVlJywgJ2JsdWUtcmdiJywgXHJcblx0XHQnaW52ZXJzZScsICdpbnZlcnNlLXJnYicsXHJcblx0XHQnd2hpdGUnLCAnd2hpdGUtcmdiJyxcclxuXHRcdCdyZWQnLCAncmVkLXJnYicsIFxyXG5cdFx0J3RlYWwnLCAndGVhbC1yZ2InLFxyXG5cdFx0J2luZGlnbycsICdpbmRpZ28tcmdiJywgXHJcblx0XHQnb3JhbmdlJywgJ29yYW5nZS1yZ2InLCBcclxuXHRcdCdwdXJwbGUnLCAncHVycGxlLXJnYicsXHJcblx0XHQneWVsbG93JywgJ3llbGxvdy1yZ2InLFxyXG5cdFx0J2dyZWVuJywgJ2dyZWVuLXJnYicsXHJcblx0XHQncGluaycsICdwaW5rLXJnYicsXHJcblx0XHQnY3lhbicsICdjeWFuLXJnYicsXHJcblx0XHQnZ3JheScsICdncmF5LXJnYicsXHJcblx0XHQnbGltZScsICdsaW1lLXJnYicsXHJcblx0XHQnZ3JheS0xMDAnLCAnZ3JheS0yMDAnLCAnZ3JheS0zMDAnLCAnZ3JheS00MDAnLCAnZ3JheS01MDAnLCAgJ2dyYXktNjAwJywgJ2dyYXktNzAwJywgJ2dyYXktODAwJywgJ2dyYXktOTAwJywgXHJcblx0XHQnZ3JheS0xMDAtcmdiJywgJ2dyYXktMjAwLXJnYicsICdncmF5LTMwMC1yZ2InLCAnZ3JheS00MDAtcmdiJywgJ2dyYXktNTAwLXJnYicsICAnZ3JheS02MDAtcmdiJywgJ2dyYXktNzAwLXJnYicsICdncmF5LTgwMC1yZ2InLCAnZ3JheS05MDAtcmdiJywgXHJcblx0XHQnbXV0ZWQnLCAnbXV0ZWQtcmdiJywgJ2VtcGhhc2lzLWNvbG9yJywgJ2VtcGhhc2lzLWNvbG9yLXJnYicsXHJcblx0XHQnaGVhZGluZy1jb2xvcicsIFxyXG5cdFx0J2JvZHktYmcnLCAnYm9keS1iZy1yZ2InLCAnYm9keS1jb2xvcicsICdib2R5LWNvbG9yLXJnYicsXHJcblx0XHQnc2Vjb25kYXJ5LWNvbG9yJywgJ3NlY29uZGFyeS1jb2xvci1yZ2InLCAnc2Vjb25kYXJ5LWJnJywgJ3NlY29uZGFyeS1iZy1yZ2InLFxyXG5cdFx0J3RlcnRpYXJ5LWNvbG9yJywgJ3RlcnRpYXJ5LWNvbG9yLXJnYicsICd0ZXJ0aWFyeS1iZycsICd0ZXJ0aWFyeS1iZy1yZ2InLFxyXG5cdFx0J2xpbmstY29sb3InLCAnbGluay1jb2xvci1yZ2InLCAnbGluay1ob3Zlci1jb2xvcicsICdsaW5rLWhvdmVyLWNvbG9yLXJnYicsIFxyXG5cdFx0J2JvcmRlci1jb2xvcicsICdib3JkZXItY29sb3ItdHJhbnNsdWNlbnQnXHJcblx0XSxcclxuXHRicmVha3BvaW50czoge1xyXG5cdFx0eHM6IDAsXHJcblx0XHRzbTogNTc2LFxyXG5cdFx0bWQ6IDc2OCxcclxuXHRcdGxnOiA5OTIsXHJcblx0XHR4bDogMTIwMCxcclxuXHRcdHh4bDogMTQwMCxcclxuXHRcdHh4eGw6IDE4MDBcclxuXHR9XHJcbn1cclxuXHJcbnZhciBzbGlkZVVwID0gZnVuY3Rpb24oZWxtLCBkdXJhdGlvbiA9IGFwcC5hbmltYXRpb24uc3BlZWQpIHtcclxuXHRpZiAoIWVsbS5jbGFzc0xpc3QuY29udGFpbnMoJ3RyYW5zaXRpb25pbmcnKSkge1xyXG5cdFx0ZWxtLmNsYXNzTGlzdC5hZGQoJ3RyYW5zaXRpb25pbmcnKTtcclxuXHRcdGVsbS5zdHlsZS50cmFuc2l0aW9uUHJvcGVydHkgPSAnaGVpZ2h0LCBtYXJnaW4sIHBhZGRpbmcnO1xyXG5cdFx0ZWxtLnN0eWxlLnRyYW5zaXRpb25EdXJhdGlvbiA9IGR1cmF0aW9uICsgJ21zJztcclxuXHRcdGVsbS5zdHlsZS5ib3hTaXppbmcgPSAnYm9yZGVyLWJveCc7XHJcblx0XHRlbG0uc3R5bGUuaGVpZ2h0ID0gZWxtLm9mZnNldEhlaWdodCArICdweCc7XHJcblx0XHRlbG0ub2Zmc2V0SGVpZ2h0O1xyXG5cdFx0ZWxtLnN0eWxlLm92ZXJmbG93ID0gJ2hpZGRlbic7XHJcblx0XHRlbG0uc3R5bGUuaGVpZ2h0ID0gMDtcclxuXHRcdGVsbS5zdHlsZS5wYWRkaW5nVG9wID0gMDtcclxuXHRcdGVsbS5zdHlsZS5wYWRkaW5nQm90dG9tID0gMDtcclxuXHRcdGVsbS5zdHlsZS5tYXJnaW5Ub3AgPSAwO1xyXG5cdFx0ZWxtLnN0eWxlLm1hcmdpbkJvdHRvbSA9IDA7XHJcblx0XHR3aW5kb3cuc2V0VGltZW91dCggKCkgPT4ge1xyXG5cdFx0XHRlbG0uc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuXHRcdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCdoZWlnaHQnKTtcclxuXHRcdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCdwYWRkaW5nLXRvcCcpO1xyXG5cdFx0XHRlbG0uc3R5bGUucmVtb3ZlUHJvcGVydHkoJ3BhZGRpbmctYm90dG9tJyk7XHJcblx0XHRcdGVsbS5zdHlsZS5yZW1vdmVQcm9wZXJ0eSgnbWFyZ2luLXRvcCcpO1xyXG5cdFx0XHRlbG0uc3R5bGUucmVtb3ZlUHJvcGVydHkoJ21hcmdpbi1ib3R0b20nKTtcclxuXHRcdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCdvdmVyZmxvdycpO1xyXG5cdFx0XHRlbG0uc3R5bGUucmVtb3ZlUHJvcGVydHkoJ3RyYW5zaXRpb24tZHVyYXRpb24nKTtcclxuXHRcdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCd0cmFuc2l0aW9uLXByb3BlcnR5Jyk7XHJcblx0XHRcdGVsbS5jbGFzc0xpc3QucmVtb3ZlKCd0cmFuc2l0aW9uaW5nJyk7XHJcblx0XHR9LCBkdXJhdGlvbik7XHJcblx0fVxyXG59O1xyXG5cclxudmFyIHNsaWRlRG93biA9IGZ1bmN0aW9uKGVsbSwgZHVyYXRpb24gPSBhcHAuYW5pbWF0aW9uLnNwZWVkKSB7XHJcblx0aWYgKCFlbG0uY2xhc3NMaXN0LmNvbnRhaW5zKCd0cmFuc2l0aW9uaW5nJykpIHtcclxuXHRcdGVsbS5jbGFzc0xpc3QuYWRkKCd0cmFuc2l0aW9uaW5nJyk7XHJcblx0XHRlbG0uc3R5bGUucmVtb3ZlUHJvcGVydHkoJ2Rpc3BsYXknKTtcclxuXHRcdGxldCBkaXNwbGF5ID0gd2luZG93LmdldENvbXB1dGVkU3R5bGUoZWxtKS5kaXNwbGF5O1xyXG5cdFx0aWYgKGRpc3BsYXkgPT09ICdub25lJykgZGlzcGxheSA9ICdibG9jayc7XHJcblx0XHRlbG0uc3R5bGUuZGlzcGxheSA9IGRpc3BsYXk7XHJcblx0XHRsZXQgaGVpZ2h0ID0gZWxtLm9mZnNldEhlaWdodDtcclxuXHRcdGVsbS5zdHlsZS5vdmVyZmxvdyA9ICdoaWRkZW4nO1xyXG5cdFx0ZWxtLnN0eWxlLmhlaWdodCA9IDA7XHJcblx0XHRlbG0uc3R5bGUucGFkZGluZ1RvcCA9IDA7XHJcblx0XHRlbG0uc3R5bGUucGFkZGluZ0JvdHRvbSA9IDA7XHJcblx0XHRlbG0uc3R5bGUubWFyZ2luVG9wID0gMDtcclxuXHRcdGVsbS5zdHlsZS5tYXJnaW5Cb3R0b20gPSAwO1xyXG5cdFx0ZWxtLm9mZnNldEhlaWdodDtcclxuXHRcdGVsbS5zdHlsZS5ib3hTaXppbmcgPSAnYm9yZGVyLWJveCc7XHJcblx0XHRlbG0uc3R5bGUudHJhbnNpdGlvblByb3BlcnR5ID0gXCJoZWlnaHQsIG1hcmdpbiwgcGFkZGluZ1wiO1xyXG5cdFx0ZWxtLnN0eWxlLnRyYW5zaXRpb25EdXJhdGlvbiA9IGR1cmF0aW9uICsgJ21zJztcclxuXHRcdGVsbS5zdHlsZS5oZWlnaHQgPSBoZWlnaHQgKyAncHgnO1xyXG5cdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCdwYWRkaW5nLXRvcCcpO1xyXG5cdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCdwYWRkaW5nLWJvdHRvbScpO1xyXG5cdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCdtYXJnaW4tdG9wJyk7XHJcblx0XHRlbG0uc3R5bGUucmVtb3ZlUHJvcGVydHkoJ21hcmdpbi1ib3R0b20nKTtcclxuXHRcdHdpbmRvdy5zZXRUaW1lb3V0KCAoKSA9PiB7XHJcblx0XHRcdGVsbS5zdHlsZS5yZW1vdmVQcm9wZXJ0eSgnaGVpZ2h0Jyk7XHJcblx0XHRcdGVsbS5zdHlsZS5yZW1vdmVQcm9wZXJ0eSgnb3ZlcmZsb3cnKTtcclxuXHRcdFx0ZWxtLnN0eWxlLnJlbW92ZVByb3BlcnR5KCd0cmFuc2l0aW9uLWR1cmF0aW9uJyk7XHJcblx0XHRcdGVsbS5zdHlsZS5yZW1vdmVQcm9wZXJ0eSgndHJhbnNpdGlvbi1wcm9wZXJ0eScpO1xyXG5cdFx0XHRlbG0uY2xhc3NMaXN0LnJlbW92ZSgndHJhbnNpdGlvbmluZycpO1xyXG5cdFx0fSwgZHVyYXRpb24pO1xyXG5cdH1cclxufTtcclxuXHJcbnZhciBzbGlkZVRvZ2dsZSA9IGZ1bmN0aW9uKGVsbSwgZHVyYXRpb24gPSBhcHAuYW5pbWF0aW9uLnNwZWVkKSB7XHJcblx0aWYgKHdpbmRvdy5nZXRDb21wdXRlZFN0eWxlKGVsbSkuZGlzcGxheSA9PT0gJ25vbmUnKSB7XHJcblx0XHRyZXR1cm4gc2xpZGVEb3duKGVsbSwgZHVyYXRpb24pO1xyXG5cdH0gZWxzZSB7XHJcblx0XHRyZXR1cm4gc2xpZGVVcChlbG0sIGR1cmF0aW9uKTtcclxuXHR9XHJcbn07XHJcblxyXG52YXIgc2V0Q29va2llID0gZnVuY3Rpb24oY29va2llTmFtZSwgY29va2llVmFsdWUpIHtcclxuXHR2YXIgbm93ID0gbmV3IERhdGUoKTtcclxuICB2YXIgdGltZSA9IG5vdy5nZXRUaW1lKCk7XHJcbiAgdmFyIGV4cGlyZVRpbWUgPSB0aW1lICsgMTAwMCozNjAwMDtcclxuICBub3cuc2V0VGltZShleHBpcmVUaW1lKTtcclxuICBkb2N1bWVudC5jb29raWUgPSBjb29raWVOYW1lICsgJz0nKyBjb29raWVWYWx1ZSArJztleHBpcmVzPScrbm93LnRvVVRDU3RyaW5nKCkrJztwYXRoPS8nO1xyXG59O1xyXG5cclxudmFyIGdldENvb2tpZSA9IGZ1bmN0aW9uKGNvb2tpZU5hbWUpIHtcclxuICBsZXQgbmFtZSA9IGNvb2tpZU5hbWUgKyBcIj1cIjtcclxuICBsZXQgZGVjb2RlZENvb2tpZSA9IGRlY29kZVVSSUNvbXBvbmVudChkb2N1bWVudC5jb29raWUpO1xyXG4gIGxldCBjYSA9IGRlY29kZWRDb29raWUuc3BsaXQoJzsnKTtcclxuICBmb3IobGV0IGkgPSAwOyBpIDxjYS5sZW5ndGg7IGkrKykge1xyXG4gICAgbGV0IGMgPSBjYVtpXTtcclxuICAgIHdoaWxlIChjLmNoYXJBdCgwKSA9PSAnICcpIHtcclxuICAgICAgYyA9IGMuc3Vic3RyaW5nKDEpO1xyXG4gICAgfVxyXG4gICAgaWYgKGMuaW5kZXhPZihuYW1lKSA9PSAwKSB7XHJcbiAgICAgIHJldHVybiBjLnN1YnN0cmluZyhuYW1lLmxlbmd0aCwgYy5sZW5ndGgpO1xyXG4gICAgfVxyXG4gIH1cclxuICByZXR1cm4gXCJcIjtcclxufTtcclxuXHJcblxyXG4vKiAwMS4gSGFuZGxlIFRoZW1lIFBhbmVsXHJcbi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSAqL1xyXG52YXIgaGFuZGxlVGhlbWVQYW5lbCA9IGZ1bmN0aW9uKCkge1xyXG5cdC8vIFRoZW1lIFBhbmVsIC0gVG9nZ2xlIC8gRGlzbWlzc1xyXG5cdHZhciBlbG0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbJysgYXBwLnRoZW1lUGFuZWwudG9nZ2xlQXR0ciArJ10nKTtcclxuXHRpZiAoZWxtKSB7XHJcblx0XHRlbG0ub25jbGljayA9IGZ1bmN0aW9uKGUpIHtcclxuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cdFx0XHR2YXIgdGFyZ2V0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLicrIGFwcC50aGVtZVBhbmVsLmNsYXNzKTtcclxuXHRcdFx0dmFyIHRhcmdldEV4cGFuZCA9ICh0YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKGFwcC50aGVtZVBhbmVsLmFjdGl2ZUNsYXNzKSkgPyBmYWxzZSA6IHRydWU7XHJcblx0XHRcdFxyXG5cdFx0XHR0YXJnZXQuY2xhc3NMaXN0LnRvZ2dsZShhcHAudGhlbWVQYW5lbC5hY3RpdmVDbGFzcyk7XHJcblx0XHRcdHNldENvb2tpZShhcHAudGhlbWVQYW5lbC5jb29raWVOYW1lLCB0YXJnZXRFeHBhbmQpO1xyXG5cdFx0fVxyXG5cdH1cclxuXHRcclxuXHQvLyBUaGVtZSBQYW5lbCAtIFRoZW1lIFNlbGVjdG9yXHJcblx0dmFyIGVsbXMgPSBbXS5zbGljZS5jYWxsKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy4nKyBhcHAudGhlbWVQYW5lbC5jbGFzcyArJyBbJysgYXBwLnRoZW1lUGFuZWwudGhlbWUudG9nZ2xlQXR0ciArJ10nKSk7XHJcblx0aWYgKGVsbXMpIHtcclxuXHRcdGVsbXMubWFwKGZ1bmN0aW9uKGVsbSkge1xyXG5cdFx0XHRlbG0ub25jbGljayA9IGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRcdHZhciB0YXJnZXRUaGVtZUNsYXNzID0gdGhpcy5nZXRBdHRyaWJ1dGUoYXBwLnRoZW1lUGFuZWwudGhlbWUuY2xhc3NBdHRyKTtcclxuXHRcdFx0XHRmb3IgKHZhciB4ID0gMDsgeCA8IGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0Lmxlbmd0aDsgeCsrKSB7XHJcblx0XHRcdFx0XHR2YXIgdGFyZ2V0Q2xhc3MgPSBkb2N1bWVudC5ib2R5LmNsYXNzTGlzdFt4XTtcclxuXHRcdFx0XHRcdGlmICh0YXJnZXRDbGFzcy5zZWFyY2goJ3RoZW1lLScpID4gLTEpIHtcclxuXHRcdFx0XHRcdFx0ZG9jdW1lbnQuYm9keS5jbGFzc0xpc3QucmVtb3ZlKHRhcmdldENsYXNzKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9XHJcblx0XHRcdFx0aWYgKHRhcmdldFRoZW1lQ2xhc3MpIHtcclxuXHRcdFx0XHRcdGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LmFkZCh0YXJnZXRUaGVtZUNsYXNzKTtcclxuXHRcdFx0XHR9XHJcblx0XHRcdFxyXG5cdFx0XHRcdHZhciB0b2dnbGVycyA9IFtdLnNsaWNlLmNhbGwoZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLicrIGFwcC50aGVtZVBhbmVsLmNsYXNzICsnIFsnKyBhcHAudGhlbWVQYW5lbC50aGVtZS50b2dnbGVBdHRyICsnXScpKTtcclxuXHRcdFx0XHR0b2dnbGVycy5tYXAoZnVuY3Rpb24odG9nZ2xlcikge1xyXG5cdFx0XHRcdFx0aWYgKHRvZ2dsZXIgIT0gZWxtKSB7XHJcblx0XHRcdFx0XHRcdHRvZ2dsZXIuY2xvc2VzdCgnLicrIGFwcC50aGVtZVBhbmVsLnRoZW1lTGlzdEl0ZW1DTGFzcykuY2xhc3NMaXN0LnJlbW92ZShhcHAudGhlbWVQYW5lbC50aGVtZS5hY3RpdmVDbGFzcyk7XHJcblx0XHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0XHR0b2dnbGVyLmNsb3Nlc3QoJy4nKyBhcHAudGhlbWVQYW5lbC50aGVtZUxpc3RJdGVtQ0xhc3MpLmNsYXNzTGlzdC5hZGQoYXBwLnRoZW1lUGFuZWwudGhlbWUuYWN0aXZlQ2xhc3MpO1xyXG5cdFx0XHRcdFx0fVxyXG5cdFx0XHRcdH0pO1xyXG5cdFx0XHRcdHNldENvb2tpZShhcHAudGhlbWVQYW5lbC50aGVtZS5jb29raWVOYW1lLCB0YXJnZXRUaGVtZUNsYXNzKTtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblx0fVxyXG5cdFxyXG5cdFxyXG5cdC8vIFRoZW1lIFBhbmVsIC0gRGFyayBNb2RlXHJcblx0dmFyIGVsbXMgPSBbXS5zbGljZS5jYWxsKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy4nKyBhcHAudGhlbWVQYW5lbC5jbGFzcyArJyBbJysgYXBwLnRoZW1lUGFuZWwudGhlbWVEYXJrTW9kZS50b2dnbGVBdHRyICsnXScpKTtcclxuXHRlbG1zLm1hcChmdW5jdGlvbihlbG0pIHtcclxuXHRcdGVsbS5vbmNoYW5nZSA9IGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRpZiAodGhpcy5jaGVja2VkKSB7XHJcblx0XHRcdFx0ZG9jdW1lbnQucXVlcnlTZWxlY3RvcignaHRtbCcpLnNldEF0dHJpYnV0ZShhcHAuZGFya01vZGUuYXR0ciwgYXBwLmRhcmtNb2RlLnZhbHVlKTtcclxuXHRcdFx0fSBlbHNlIHtcclxuXHRcdFx0XHRkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdodG1sJykucmVtb3ZlQXR0cmlidXRlKGFwcC5kYXJrTW9kZS5hdHRyKTtcclxuXHRcdFx0fVxyXG5cdFx0XHRBcHAuaW5pdFZhcmlhYmxlKCk7XHJcblx0XHRcdHNldENvb2tpZShhcHAudGhlbWVQYW5lbC50aGVtZURhcmtNb2RlLmNvb2tpZU5hbWUsICh0aGlzLmNoZWNrZWQpID8gYXBwLnRoZW1lUGFuZWwudGhlbWVEYXJrTW9kZS5jbGFzcyA6ICcnKTtcclxuXHRcdFx0ZG9jdW1lbnQuZGlzcGF0Y2hFdmVudChuZXcgQ3VzdG9tRXZlbnQoYXBwLmRhcmtNb2RlLmV2ZW50TmFtZSkpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cdFxyXG5cdFxyXG5cdGlmIChnZXRDb29raWUoYXBwLnRoZW1lUGFuZWwuY29va2llTmFtZSkgJiYgZ2V0Q29va2llKGFwcC50aGVtZVBhbmVsLmNvb2tpZU5hbWUpID09ICd0cnVlJykge1xyXG5cdFx0dmFyIGVsbSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy4nKyBhcHAudGhlbWVQYW5lbC5jbGFzcyArJyBbJysgYXBwLnRoZW1lUGFuZWwudG9nZ2xlQXR0ciArJ10nKTtcclxuXHRcdGlmIChlbG0pIHtcclxuXHRcdFx0ZWxtLmNsaWNrKCk7XHJcblx0XHR9XHJcblx0fVxyXG5cdGlmIChnZXRDb29raWUoYXBwLnRoZW1lUGFuZWwudGhlbWUuY29va2llTmFtZSkpIHtcclxuXHRcdHZhciBlbG0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuJysgYXBwLnRoZW1lUGFuZWwuY2xhc3MgKycgWycrIGFwcC50aGVtZVBhbmVsLnRoZW1lLnRvZ2dsZUF0dHIgKyddWycrIGFwcC50aGVtZVBhbmVsLnRoZW1lLmNsYXNzQXR0ciArJz1cIicrIGdldENvb2tpZShhcHAudGhlbWVQYW5lbC50aGVtZS5jb29raWVOYW1lKSArJ1wiXScpO1xyXG5cdFx0aWYgKGVsbSkge1xyXG5cdFx0XHRlbG0uY2xpY2soKTtcclxuXHRcdH1cclxuXHR9XHJcblx0aWYgKGdldENvb2tpZShhcHAudGhlbWVQYW5lbC50aGVtZURhcmtNb2RlLmNvb2tpZU5hbWUpKSB7XHJcblx0XHR2YXIgZWxtID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLicrIGFwcC50aGVtZVBhbmVsLmNsYXNzICsnIFsnKyBhcHAudGhlbWVQYW5lbC50aGVtZURhcmtNb2RlLnRvZ2dsZUF0dHIgKyddJyk7XHJcblx0XHRpZiAoZWxtKSB7XHJcblx0XHRcdGVsbS5jaGVja2VkID0gdHJ1ZTtcclxuXHRcdFx0ZWxtLm9uY2hhbmdlKCk7XHJcblx0XHR9XHJcblx0fVxyXG59O1xyXG5cclxuXHJcbi8qIDAyLiBIYW5kbGUgR2V0IENzcyBWYXJpYWJsZVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0gKi9cclxudmFyIGhhbmRsZUNzc1ZhcmlhYmxlID0gZnVuY3Rpb24oKSB7XHJcblx0dmFyIHJvb3RTdHlsZSA9IGdldENvbXB1dGVkU3R5bGUoZG9jdW1lbnQuYm9keSk7XHJcblx0XHJcblx0Ly8gZm9udFxyXG5cdGlmIChhcHAudmFyaWFibGVGb250TGlzdCAmJiBhcHAudmFyaWFibGVQcmVmaXgpIHtcclxuXHRcdGZvciAodmFyIGkgPSAwOyBpIDwgKGFwcC52YXJpYWJsZUZvbnRMaXN0KS5sZW5ndGg7IGkrKykge1xyXG5cdFx0XHRhcHAuZm9udFthcHAudmFyaWFibGVGb250TGlzdFtpXS5yZXBsYWNlKC8tKFthLXp8MC05XSkvZywgKG1hdGNoLCBsZXR0ZXIpID0+IGxldHRlci50b1VwcGVyQ2FzZSgpKV0gPSByb290U3R5bGUuZ2V0UHJvcGVydHlWYWx1ZSgnLS0nKyBhcHAudmFyaWFibGVQcmVmaXggKyBhcHAudmFyaWFibGVGb250TGlzdFtpXSkudHJpbSgpO1xyXG5cdFx0fVxyXG5cdH1cclxuXHRcclxuXHQvLyBjb2xvclxyXG5cdGlmIChhcHAudmFyaWFibGVDb2xvckxpc3QgJiYgYXBwLnZhcmlhYmxlUHJlZml4KSB7XHJcblx0XHRmb3IgKHZhciBpID0gMDsgaSA8IChhcHAudmFyaWFibGVDb2xvckxpc3QpLmxlbmd0aDsgaSsrKSB7XHJcblx0XHRcdGFwcC5jb2xvclthcHAudmFyaWFibGVDb2xvckxpc3RbaV0ucmVwbGFjZSgvLShbYS16fDAtOV0pL2csIChtYXRjaCwgbGV0dGVyKSA9PiBsZXR0ZXIudG9VcHBlckNhc2UoKSldID0gcm9vdFN0eWxlLmdldFByb3BlcnR5VmFsdWUoJy0tJysgYXBwLnZhcmlhYmxlUHJlZml4ICsgYXBwLnZhcmlhYmxlQ29sb3JMaXN0W2ldKS50cmltKCk7XHJcblx0XHR9XHJcblx0fVxyXG59O1xyXG5cclxuXHJcbi8qIEFwcGxpY2F0aW9uIENvbnRyb2xsZXJcclxuLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tICovXHJcbnZhciBBcHAgPSBmdW5jdGlvbiAoKSB7XHJcblx0XCJ1c2Ugc3RyaWN0XCI7XHJcblx0XHJcblx0cmV0dXJuIHtcclxuXHRcdC8vbWFpbiBmdW5jdGlvblxyXG5cdFx0aW5pdDogZnVuY3Rpb24gKCkge1xyXG5cdFx0XHRoYW5kbGVUaGVtZVBhbmVsKCk7XHJcblx0XHRcdFxyXG5cdFx0XHR0aGlzLmluaXRWYXJpYWJsZSgpO1xyXG5cdFx0fSxcclxuXHRcdGluaXRWYXJpYWJsZTogZnVuY3Rpb24oKSB7XHJcblx0XHRcdGhhbmRsZUNzc1ZhcmlhYmxlKCk7XHJcblx0XHR9XHJcblx0fTtcclxufSgpO1xyXG5cclxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XHJcblx0QXBwLmluaXQoKTtcclxufSk7Il19