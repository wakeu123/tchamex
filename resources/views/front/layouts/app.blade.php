<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="3HjynndSPY4ZnXQdIrivKCULwsIbEwzJQMJwc=">
        <meta name="robots" content="follow,index">

        <title>{{ config('app.name') }}</title>

        <meta name="author" content="Wakeu Georges Favier">
        <link href="{{ asset('css/home.min.css') }}" rel="stylesheet">
       

        <!-- Styles -->
       @yield('css')
       <meta property="og:url" content="{{ request()->url() }}"/>
       @yield('og')
       <script type="text/javascript">
            var gdprAppliesGlobally=!1;
            function addFrame(){
                if(!window.frames.__cmpLocator)
                if(document.body){
                var a=document.body,e=document.createElement("iframe");
                e.style="display:none",e.name="__cmpLocator",a.appendChild(e)}else setTimeout(addFrame,5)
                }function stubCMP(a,e,n){
                    if(__cmp.a=__cmp.a||[],!a)return __cmp.a;"ping"===a?n({gdprAppliesGlobally:gdprAppliesGlobally,cmpLoaded:!1},!0):__cmp.a.push([a,e,n])}function cmpMsgHandler(d){var p="string"==typeof d.data,a=p?-1!==d.data.indexOf("__cmpCall")?JSON.parse(d.data):{}:d.data;if(a.__cmpCall){var c=a.__cmpCall;window.__cmp(c.command,c.parameter,function(a,e){var n={__cmpReturn:{returnValue:a,success:e,callId:c.callId}};d.source.postMessage(p?JSON.stringify(n):n,"*")})}}addFrame(),"function"!=typeof __cmp&&(window.__cmp=stubCMP,__cmp.msgHandler=cmpMsgHandler,window.addEventListener?window.addEventListener("message",cmpMsgHandler,!1):window.attachEvent("onmessage",cmpMsgHandler));
        </script>
  
  <script>
  (function(d){
      d.className=d.className.replace(/no-js/,'');
  })
  (document.documentElement);</script>
  
    <script type="text/javascript">
        var _acListener={version:"1.2.0",
        allowedKeys:["appConsent_uuid","appConsent_acn","appConsent_status"],
        isSupported:function(){
            try{
                return"localStorage"
                in window&&null!==window.localStorage}
            catch(a){
                return!1}},isValidData:function(a){var e=!1;return a&&a.version&&a.expire&&a.data&&a.version.trim()&&a.expire.trim()&&(e=!0),e},isOutdatedData:function(a){var e=new Date(a),t=new Date;return!(new Date(e)>new Date(t))},get:function(a){var e=localStorage.getItem(a);if(!(e&&e.length&&_acListener.allowedKeys.includes(a)))return null;try{var t=JSON.parse(e);return _acListener.isValidData(t)?_acListener.isOutdatedData(t.expire)?(_acListener.delete(a),null):t:null}catch(a){return null}},set:function(a,e){if(_acListener.allowedKeys.includes(a)){var t={version:e.version,expire:e.expire,data:e.data};if("appConsent_acn"===a){var n=_acListener.get("appConsent_acn"),r=r||window.acLib;if(n&&n.data&&n.data[r.datas.versionID]&&n.data[r.datas.versionID].length)t.data[r.datas.versionID][r.datas.buildID]=e.data;else if(t.data=n&&n.data?n.data:{},t.data[r.datas.versionID]=t.data[r.datas.versionID]||{},r.datas.hasOwnProperty("usingPubvendors")&&r.datas.usingPubvendors&&r.datas.hasOwnProperty("pubVendorsHash")){var s=r.datas.buildID+"_"+r.datas.pubVendorsHash;t.data[r.datas.versionID][s]=e.data}else t.data[r.datas.versionID][r.datas.buildID]=e.data}return localStorage.setItem(a,JSON.stringify(t)),!0}return!1},delete:function(a){_acListener.allowedKeys.includes(a)&&localStorage.removeItem(a)},clear:function(){_acListener.allowedKeys.forEach(function(a){_acListener.delete(a)})}};window._acListener=_acListener;
    </script>
    <script type="text/javascript">
                    apntag.anq.push(function() {
                    //apntag.debug = 1;
                    apntag.setPageOpts({
                        member: 3273,
                        disablePsa: true,
                        consentManagement: {
                        disabled: false,
                        timeout: 10000
                        }
                    });
                    });
    </script>
    </head>
    <body class="responsive-layout   public-view custom-header">
       
    @yield('content')

    @include('front.partials._footers._footer')
        <script type="text/javascript" id="">(function(a,e,f,g,b,c,d){a[b]||(a.GlobalSnowplowNamespace=a.GlobalSnowplowNamespace||[],a.GlobalSnowplowNamespace.push(b),a[b]=function(){(a[b].q=a[b].q||[]).push(arguments)},a[b].q=a[b].q||[],c=e.createElement(f),d=e.getElementsByTagName(f)[0],c.async=1,c.src=g,d.parentNode.insertBefore(c,d))})(window,document,"script","https://d277l6isaki01b.cloudfront.net/2.5.0/viadeo_snowp.js","snowplow");
            window.snowplow("newTracker","snowplow_cc","c.viadeo.com",{appId:"limbo",cookieDomain:".viadeo.com",respectDoNotTrack:!1,cookieName:"_sp_viad_",post:!1,bufferSize:1,forceSecureTracker:!0});var encryptedMemberId="";""!=encryptedMemberId&&"0020"!=encryptedMemberId&&window.snowplow("setUserId",encryptedMemberId);function trackLinksFilter(a){return"true"==a.getAttribute("data-track-link")}window.snowplow("enableLinkClickTracking",{filter:trackLinksFilter},null,!0);</script>
            <script type="text/javascript" id="">(function(a,e,f,g,b,c,d){a[b]||(a.GlobalSnowplowNamespace=a.GlobalSnowplowNamespace||[],a.GlobalSnowplowNamespace.push(b),a[b]=function(){(a[b].q=a[b].q||[]).push(arguments)},a[b].q=a[b].q||[],c=e.createElement(f),d=e.getElementsByTagName(f)[0],c.async=1,c.src=g,d.parentNode.insertBefore(c,d))})(window,document,"script","https://d277l6isaki01b.cloudfront.net/2.5.0/viadeo_snowp.js","sp_visibility");
            window.sp_visibility("newTracker","sp_visibility","c.viadeo.com",{appId:"limbo",cookieDomain:".viadeo.com",cookieName:"_sp_viad_",respectDoNotTrack:!1,post:!0,bufferSize:1,forceSecureTracker:!0});var encryptedMemberId="";""!=encryptedMemberId&&"0020"!=encryptedMemberId&&window.sp_visibility("setUserId",encryptedMemberId);</script><script type="text/javascript" id="">var affiliate_id=google_tag_manager["GTM-NKTLGJ"].macro(5)||0;"string"===typeof affiliate_id&&(affiliate_id=0);
            try{window.snowplow("trackPageView",null,[{schema:"iglu:com.viadeo/user_context/jsonschema/1-0-0",data:{member_webid:google_tag_manager["GTM-NKTLGJ"].macro(6),member_uuid:google_tag_manager["GTM-NKTLGJ"].macro(7),is_premium:google_tag_manager["GTM-NKTLGJ"].macro(8),has_picture:"true"==google_tag_manager["GTM-NKTLGJ"].macro(9),nb_contacts:google_tag_manager["GTM-NKTLGJ"].macro(10),affiliate_id:affiliate_id,is_logged:""!=google_tag_manager["GTM-NKTLGJ"].macro(11)&&"0020"!=google_tag_manager["GTM-NKTLGJ"].macro(12)}}],null)}catch(a){throw Error("Error in snowplow track page view");};</script>
            <script type="text/javascript" id="">window.Krux||((Krux=function(){Krux.q.push(arguments)}).q=[]);(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===location.protocol?"https:":"http:")+"//cdn.krxd.net/controltag/rogv419dg.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>

            <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1576360572410614");fbq("track","PageView");</script>
            <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1576360572410614&amp;ev=PageView&amp;noscript=1"></noscript>


            <script type="text/javascript" id="">var _zbo=_zbo||{register:function(a,b){this[a]=this[a]||[];this[a].push(b)}};(function(a,b){var c=a.createElement(b),d=a.getElementsByTagName(b)[0];c.async=!0;c.src="//dpm.zebestof.com/2054/tag.js";d.parentNode.insertBefore(c,d)})(document,"script");_zbo.register("view");</script>
            <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","317011989070330");fbq("track","PageView");</script>
            <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=317011989070330&amp;ev=PageView&amp;noscript=1"></noscript>

            <script type="text/javascript" id="">(function(){function e(){if(!window.frames.__cmpLocator)if(document.body){var a=document.body,b=document.createElement("iframe");b.style="display:none";b.name="__cmpLocator";a.appendChild(b)}else setTimeout(e,5)}function g(a,b,c){if(__cmp.a=__cmp.a||[],!a)return __cmp.a;"ping"===a?c({gdprAppliesGlobally:h,cmpLoaded:!1},!0):__cmp.a.push([a,b,c])}function d(a){var b="string"==typeof a.data,c=b?-1!==a.data.indexOf("__cmpCall")?JSON.parse(a.data):{}:a.data;if(c.__cmpCall){var d=c.__cmpCall;window.__cmp(d.command,
            d.parameter,function(c,e){var f={__cmpReturn:{returnValue:c,success:e,callId:d.callId}};a.source.postMessage(b?JSON.stringify(f):f,"*")})}}var h=!1;e();"function"!=typeof __cmp&&(window.__cmp=g,__cmp.msgHandler=d,window.addEventListener?window.addEventListener("message",d,!1):window.attachEvent("onmessage",d));window.consentToolReturned=!1;window.__cmp("ac_showConsentToolIfNeeded",{},function(){window.consentToolReturned=!0})})();</script>

            
            <script type="text/javascript" id="" src="./Viadeo.com - Cameroun _ réseau social pour professionnels_files/notice.js.téléchargement"></script><div class="kxhead" data-id="rogv419dg" style="display:none !important;"><span class="kxtag kxinvisible" data-id="26958"><script>
            (function() {
                /* Data Transfer Code for lefigaro */

                var url = window.location.host + window.location.pathname;

                /* for getting the words out of the url

                example:	http://www.lefigaro.fr/international/2016/01/21/01003-20160121ARTFIG00178-poutine-a-probablement-approuve-l-assassinat-de-litvinenko.php
                */

                /* iterate over words */
                function extractWords(value) {
                    var ret = [];

                    // common delimiter
                    var tmp = (value.match(/\-/)) ? value.split('-') : value;
                    if (typeof(tmp) == 'string') {
                        if (wordRule(tmp) !== false) {
                            ret.push(tmp);
                        }
                    }
                    // an array
                    else {
                        var i;
                        for (i = 0; i < tmp.length; i++) {
                            if (tmp.hasOwnProperty(i)) {
                                if (wordRule(tmp[i]) !== false) {
                                    ret.push(tmp[i]);
                                }
                            }
                        }
                    }

                    return ret;
                }

                /* This is where we define the different rules for working out a word
                    note: \W is just A-Za-z0-9 as we've got french and other EU alphabets,
                        so need to more avoid lots of numbers
                */
                function wordRule(word) {

                    // basically we ignore all numbers, and very short words
                    if (!word || word.length <= 2 || word.match(/^[0-9]*$/) || word.match(/^[0-9]{4}/)) {
                        return false;
                    } else {
                        return word;
                    }

                }

                /* Split the url out into words that we can match */
                function extractUrl(url) {
                    var matches = url.replace(/\.(html?|php[0-9]?|;jsessionid=[a-z0-9]*)$/, '').split('/');

                    var i, tmp, overall = [];

                    for (i in matches) {
                        tmp = [];
                        if (matches.hasOwnProperty(i)) {
                            tmp = extractWords(matches[i]);
                            if (tmp.length > 0) {
                                // unique values needed
                                overall = Krux._.union(overall, tmp);
                            }
                        }
                    }

                    return overall;
                }

                // comma separated list of values
                Krux('set', {
                    'page_attr_url_words': extractUrl(window.location.pathname).join(',')
                });

            })();
            </script></span><span class="kxtag kxinvisible" data-id="29408"><script>
            (function(){
                Krux('scrape',{'page_attr_url_path_1':{'url_path':'1'}});
                Krux('scrape',{'page_attr_url_path_2':{'url_path':'2'}});
                Krux('scrape',{'page_attr_url_path_3':{'url_path':'3'}});
                Krux('scrape',{'page_attr_url_path_4':{'url_path':'4'}});
                Krux('scrape',{'page_attr_meta_keywords':{meta_name:'keywords'}});

                Krux('scrape',{'page_attr_domain':{url_domain: '2'}});

            })();
            </script></span><span class="kxtag kxinvisible" data-id="26874"><script type="text/javascript">Krux('social.init');</script></span><span class="kxtag kxinvisible" data-id="26875"><script>
            // this tag is intentionally blank
            </script></span><span class="kxtag kxinvisible" data-id="26876"></span><span class="kxtag kxinvisible" data-id="26963"><script>
            /*url nettoyee */
            Krux('set', { 'page_attr_url_cleaned': window.location.host + window.location.pathname	});
            /*full domain*/
            Krux('set', 'page_attr_full_domain', window.location.href.split('/')[2]);
            /*collecte du title */
            Krux('set', 'page_attr_page_title', document.title);
            /*referrer et source*/
            Krux('set', 'page_attr_sourcesite', Krux('get','site')+'-'+document.referrer.split('/')[2]);
            Krux('scrape', { "page_attr_url_path_1": {url_path: "1"}});
            /** Mini api for figData Commun functions */
            figData = {
                getMeta : function (name,content)
                {
                    if(typeof document.querySelector !== 'function') {return undefined;}
                    var content = (content==null)?'content':content
                        ,node = document.querySelector("meta[name='"+name+"']");
                    return node === null ? undefined : node.getAttribute(content);
                }
                ,getlocalStorage : function(name)
                {
                    var data = localStorage.getItem(name)
                    return data === null ? undefined : data ;
                }
                ,getParam : function (param)
                {
                    var param_value = '',raw_url = document.location.href;
                    if(raw_url.indexOf('?') > 0)
                    {
                        var url_params = raw_url.split('?')
                            ,indi_params = url_params[1].split('&');
                        for(var i=0;i<indi_params.length;i++)
                        {
                            if(indi_params[i].indexOf(param+'=') == 0)
                            {
                                param_value = indi_params[i].indexOf('#') > 0 ? indi_params[i].substring(param.length+1,indi_params[i].indexOf('#')) : indi_params[i].substr(param.length+1);
                            }
                        }
                    }
                    return param_value;
                }
                , getParamFromString : function(name,string)
                {
                    name = name.replace(/[\[]/, "\\[").replace(/[\]]/,"\\]");
                    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)")
                        ,results = regex.exec( string );
                    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g," "));
                }
            };
            (function()
            {
                if (typeof xt_tags !== 'undefined') {
                    var xiti_tags = xt_tags };
                var addData	= function(data) { data !== undefined && ctnt_q.push(data); }
                    ,ctnt_q=[];
                addData( figData.getMeta("news_keywords") );
                addData( figData.getMeta("keywords") ? figData.getMeta("keywords") : figData.getMeta("Keywords") );
                addData(xiti_tags);
                typeof dataLayer === 'object'
                    && dataLayer.forEach(function(data)
                    {
                        if(typeof data.appConfig === 'object' && typeof data.appConfig.asl === 'object' && typeof data.appConfig.asl.keywords === 'object' )
                        {
                            addData( data.appConfig.asl.keywords.map(function(q){return q.replace(/keyword=/, '');}) );
                        }
                    });
                typeof asl !== 'undefined' && typeof asl.conf !== 'undefined' && typeof jQuery !== 'undefined'
                Krux('set', 'page_attr_ctnt_qual', ctnt_q);
                /* Collecte geo zip */
                Krux('set', { 'page_attr_code_posta': (function(){ var newZip = figData.getParamFromString('zip',figData.getlocalStorage('kxlefigaro_geo')); return newZip === "" ? figData.getParamFromString('zip',figData.getlocalStorage('kxgeo')) : newZip; })() } );
                var een = figData.getParam('een');
                var seen = figData.getParam('seen')
                een.length > 0 && Krux('set', 'page_attr_seen-een', seen + "-" + een);
            }());
            </script></span><span class="kxtag kxinvisible" data-id="27613"><script>
            (function(){

                var params = Krux('require:util').urlParams();
                
                Krux ('set', { 
                'page_attr_lefigaro_utm_source': params.utm_source,
                'page_attr_lefigaro_utm_medium': params.utm_medium,
                'page_attr_lefigaro_utm_campaign': params.utm_campaign,
                'page_attr_lefigaro_utm_content': params.utm_content,
                'page_attr_lefigaro_utm_term': params.utm_term 
                });
                
            })();
            </script></span><span class="kxtag kxinvisible" data-id="30562"><script>
            
            (function(){
            var kuid = Krux('get', 'user');
            if (kuid && localStorage && (!localStorage.getItem("lastkf") || localStorage.getItem("lastkf") < Date.now() - 15 * 24 * 60 * 60 * 1000)) {
                localStorage.setItem("lastkf", Date.now());
                new Image().src = '//dpm.zebestof.com/rsync.png?cookie=1&noindex=true&pubkey=krux&exid=' + kuid;
            }
            })();


            
            </script></span><span class="kxtag kxinvisible" data-id="31290"><script>
            (function() {
                /* Selective Attribute DataLayer Library Tag */
                var _, allAttr, allowedList, attr, attributes, dataLayerIngester, dataObj,
                    isAllowed, keepCase, normalizeName, omitKeys, optimizeNames, pageAttr, prefix,
                    toSet, trim, userAttr, value,
                    hasProp = {}.hasOwnProperty;
                _ = Krux('require:underscore');
                dataLayerIngester = Krux('require:scrape').ingestDataLayer;

                /* Safe copy of dataLayer object */
                dataObj = Krux('scrape.js_global', 'dataLayer');

                /* String trimming helper function */
                trim = function(attr) {
                    return ("" + attr).replace(/^\s+|\s+$/g, '');
                };

                /* Attribute configs */
                pageAttr = _.map('undefined'.split(','), trim);
                userAttr = _.map('visitorId1, visitorId2'.split(','), trim);

                /* Create a array of attributes striping any empty strings */
                allAttr = _.without(pageAttr.concat(userAttr), '');

                /* Configuration settings */
                prefix = 'viadeo__';
                keepCase = 'true' === 'true';
                omitKeys = 'undefined'.split(',');

                /* Function to varify if attribute should be used */
                isAllowed = function(value, whitelist) {
                    var i, len, str, x;
                    str = "" + value;
                    if (!((value != null) && str.length > 0)) {
                        return false;
                    }
                    for (i = 0, len = whitelist.length; i < len; i++) {
                        x = whitelist[i];
                        if (value.match(x) != null) {
                            return true;
                        }
                    }
                    return false;
                };

                /* Function to standardise the attribute names */
                normalizeName = function(name, optimize) {
                    if (optimize == null) {
                        optimize = false;
                    }
                    if (keepCase) {
                        return name;
                    }
                    return ("" + name).replace(/([A-Z])([A-Z]+)/g, function(full, first, rest) {
                        if (optimize === true) {
                            return "" + first + (rest.toLowerCase());
                        }
                        return "" + full;
                    }).replace(/_*([A-Z])/g, '_$1').replace(/^_/, '').toLowerCase();
                };

                /* Creates a pattern/replacement config for dataLayer tool to clean up names */
                optimizeNames = function(names) {
                    var config, i, len, name;
                    config = [{
                        pattern: /(\.)_/,
                        replacement: '$1'
                    }];
                    for (i = 0, len = names.length; i < len; i++) {
                        name = names[i];
                        config.push({
                            pattern: normalizeName(name),
                            replacement: normalizeName(name, true)
                        });
                    }
                    if (!prefix.match(/^_$|null|undefined|false/)) {
                        config.push({
                            pattern: /((?:page|user)_attr_)/,
                            replacement: "$1" + prefix
                        });
                    }
                    return config;
                };

                /* Get a full list of attributes usting the dataLayer tool */
                attributes = dataLayerIngester(dataObj, {
                    omitKeys: _.without(omitKeys.concat([/gtm\./, /sessionid/i,
                        /\.phpsessid$/i, /\.sid$/i, /\.zenid$/i,
                        /\.requestid$/i
                    ]), ''),
                    omitValues: [/.*@.*(?:\..*)+/, /gtm\./, /^(https?:)?\/\/[^\/]+/,
                        /^\/[^\/]+/, /.{255}/
                    ],
                    caseSensitive: keepCase,
                    useFullPath: 'false' === 'true',
                    useLastValue: 'false' === 'true',
                    customDelimited: [/./],
                    altDelimiter: ',',
                    userKeys: _.map(userAttr, function(exp) {
                        return new RegExp("(^|\\.)" + exp + "$");
                    }),
                    convertAttrNames: !keepCase ? optimizeNames(allAttr) : void 0
                });

                /* Only set Attributes in the allowed list */
                allowedList = _.map(allAttr, function(name) {
                    return new RegExp("(_attr_|_attr_" + prefix + "|\\.)" + (
                        normalizeName(name, true)) + "$");
                });
                toSet = {};
                for (attr in attributes) {
                    if (!hasProp.call(attributes, attr)) continue;
                    value = attributes[attr];
                    if (isAllowed(attr, allowedList)) {
                        toSet[attr] = value;
                    }
                }
                Krux('set', toSet);
            }).call();
            </script></span><span class="kxtag kxinvisible" data-id="36204"><script>
            (function() {
                var site = Krux('get', 'site');
                if (site == 'Viadeo') site = 'Viadeo';
                var prefix = site + '$$';

                function scrape_vals(attribute_name, variable) {
                    var value = Krux('scrape.js_global', variable);
                    if (value) Krux('set', 'page_attr_' + attribute_name, prefix + value);
                }

                scrape_vals('ae_fonction', 'window.headerData.user.tagLine');
                scrape_vals('ae_fonction', 'window.headerData.user.gender');
                scrape_vals('ae_fonction', 'window.headerData.user.headline.split(",",1)[0]');
                scrape_vals('ae_fonction', 'window.headerData.user.sectorId');

            })();
            </script></span><span class="kxtag kxinvisible" data-id="42674"><script>
            (function(){
                var Nav = window.navigator.userAgent;

                // all based on https://developer.mozilla.org/en-US/docs/Web/HTTP/Browser_detection_using_the_user_agent
                // Safari
                if(Nav.match(/Safari\/[0-9]*/) && ! (Nav.match(/Chrome\//) || Nav.match(/Chromium\//))){
                    Krux('set',{page_attr_browser_name:'Safari'});
                }

                // Firefox
                if(Nav.match(/Firefox\/[0-9]*/) && ! (Nav.match(/Seamonkey\//))){
                    Krux('set',{page_attr_browser_name:'Firefox'});
                }

                // Chrome
                if(Nav.match(/Chrome\/[0-9]*/) && ! (Nav.match(/Chromium\//))){
                    Krux('set',{page_attr_browser_name:'Chrome'});
                }

                // MSIE (not necessarily Edge)
                if(Nav.match(/MSIE\/[0-9]*/)){
                    Krux('set',{page_attr_browser_name:'Internet Explorer'});
                }

                // Opera
                if(Nav.match(/OPR\/[0-9]*/)){
                    Krux('set',{page_attr_browser_name:'Opera 15+'});
                }

                // Opera
                if(Nav.match(/Opera\/[0-9]*/)){
                    Krux('set',{page_attr_browser_name:'Opera 12 (and below)'});
                }
            })();
            </script></span><span class="kxtag kxinvisible" data-id="42675"><script>
            (function(){
                function isFacebookApp() {
                    var ua = navigator.userAgent || navigator.vendor || window.opera;
                    return (ua.indexOf("FBAN") > -1) || (ua.indexOf("FBAV") > -1);
                }
                // setting this so that we can add other "browsers" as needed
                if(isFacebookApp() === true){
                    Krux('set',{page_attr_in_app_browser: 'facebook'});
                }
            })();
            </script>
    </body>
</html>
