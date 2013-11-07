/*!
 * jQuery - Spectragram by Adrian Quevedo
 * http://adrianquevedo.com/  - http://lab.adrianquevedo.com/ - http://elnucleo.com.co/
 *
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * You are free to use this plugin in commercial projects as long as the copyright header is left intact.
 *
 * This plugin uses the Instagram(tm) API and is not endorsed or certified by Instagram or Burbn, inc. 
 * All Instagram(tm) logos and trademarks displayed on this plugin are property of Burbn, Inc.
 *
 * Date: Thu Jul 15 14:05:02 2012 -0500
 */
 
if(typeof Object.create!=="function"){Object.create=function(e){function t(){}t.prototype=e;return new t}}(function(e,t,n,r){var i={init:function(t,n){var r=this;r.elem=n;r.$elem=e(n);r.api="https://api.instagram.com/v1",r.accessData=e.fn.spectragram.accessData,r.options=e.extend({},e.fn.spectragram.options,t)},getRecentMedia:function(e){var t=this,n="/users/"+e+"/media/recent/?"+t.accessData.clientID+"&access_token="+t.accessData.accessToken+"";t.fetch(n).done(function(e){t.display(e)})},getUserFeed:function(){var t=this,n="/users/search?q="+t.options.query+"&count="+t.options.max+"&client_id="+t.accessData.clientID+"";t.fetch(n).done(function(n){if(n.data.length){t.getRecentMedia(n.data[0].id)}else{e.error("Spectagram.js - Error: the username "+t.options.query+" does not exist.")}})},getPopular:function(){var e=this,t="/media/popular?client_id="+e.accessData.clientID+"&access_token="+e.accessData.accessToken+"";e.fetch(t).done(function(t){e.display(t)})},getRecentTagged:function(){var t=this,n="/tags/"+t.options.query+"/media/recent?client_id="+t.accessData.clientID+"&access_token="+t.accessData.accessToken+"";t.fetch(n).done(function(n){if(n.data.length){t.display(n)}else{e.error("Spectagram.js - Error: the tag "+t.options.query+" does not have results.")}})},fetch:function(t){var n=this,r=n.api+t;return e.ajax({type:"GET",dataType:"jsonp",cache:false,url:r})},display:function(t){var n=this,r=n.options.size,i,s=n.options.max>=t.data.length?t.data.length:n.options.max;if(t.data.length===0){n.$elem.append(e(n.options.wrapEachWith).append(n.options.notFoundMsg))}else{for(var o=0;o<s;o++){if(r=="small"){i=t.data[o].images.thumbnail.url}else if(r=="medium"){i=t.data[o].images.low_resolution.url}else{i=t.data[o].images.standard_resolution.url}n.$elem.append(e(n.options.wrapEachWith).append("<a title='"+t.data[o].caption.text+"' target='_blank' href='"+t.data[o].link+"'><img src='"+i+"'></img></a>"))}}n.options.complete.call(n)}};jQuery.fn.spectragram=function(t,n){if(jQuery.fn.spectragram.accessData.clientID){this.each(function(){var r=Object.create(i);r.init(n,this);if(r[t]){return r[t](this)}else{e.error("Method "+t+" does not exist on jQuery.spectragram")}})}else{e.error("You must define an accessToken and a clientID on jQuery.spectragram")}};jQuery.fn.spectragram.options={max:10,query:"coffee",size:"medium",wrapEachWith:"<li></li>",complete:null};jQuery.fn.spectragram.accessData={accessToken:null,clientID:null}})(jQuery,window,document)

jQuery.fn.spectragram.accessData = {
    accessToken: 'd661a5e14ba949e0baee0403723d77cc',
    clientID: 'bdd29ffecac84eb49226cfb22243a9a6'
};

$('.insta-feed').spectragram('getRecentTagged',{
    query: 'bulldogconnect',
    query: 'charge',
    max: 9,
    size: 'medium',
    wrapEachWith: '<p></p>'
});

