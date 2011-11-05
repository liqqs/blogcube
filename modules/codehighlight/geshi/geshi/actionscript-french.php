<?php
/*************************************************************************************
 * actionscript.php
 * ----------------
 * Author: Steffen Krause (Steffen.krause@muse.de)
 * Copyright: (c) 2004 Steffen Krause, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.7.6
 * CVS Revision Version: $Revision: 1.5 $
 * Date Started: 2004/06/20
 * Last Modified: $Date: 2005/11/20 07:47:40 $
 *
 * Actionscript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/08/25 (1.0.2)
 * Author [ NikO ] - http://niko.informatif.org
 * - add full link for myInstance.methods to http://wiki.media-box.net/documentation/flash
 * 2004/11/27 (1.0.1)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Actionscript',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            '#include', 
            'for', 
            'foreach', 
            'if', 
            'elseif', 
            'else', 
            'while', 
            'do', 
            'dowhile',
            'endwhile', 
            'endif', 
            'switch', 
            'case', 
            'endswitch', 
            'break', 
            'continue', 
            'in',
            'null', 
            'false', 
            'true', 
            'var',
            'default',
            'new', 
            '_global',
            'undefined',
            'super'    
            ),
        2 => array(
            'static',
            'private',
            'public',
            'class',
            'extends',
            'implements',
            'import',
            'return',
            'trace',
            '_quality',
            '_root',
            'set',
            'setInterval',
            'setProperty',
            'stopAllSounds',
            'targetPath',
            'this',
            'typeof',
            'unescape',
            'updateAfterEvent'
            ),
        3 => array (
            'Accessibility',
            'Array',
            'Boolean',
            'Button',
            'Camera',
            'Color',
            'ContextMenuItem',
            'ContextMenu',
            'Cookie',
            'Date',
            'Error',
            'function',
            'FWEndCommand',
            'FWJavascript',
            'Key',
            'LoadMovieNum',
            'LoadMovie',
            'LoadVariablesNum',
            'LoadVariables',
            'LoadVars',
            'LocalConnection',
            'Math',
            'Microphone',
            'MMExecute',
            'MMEndCommand',
            'MMSave',
            'Mouse',
            'MovieClipLoader',
            'MovieClip',
            'NetConnexion',
            'NetStream',
            'Number',
            'Object',
            'printAsBitmapNum',
            'printNum',
            'printAsBitmap',
            'printJob',
            'print',
            'Selection',
            'SharedObject',
            'Sound',
            'Stage',
            'String',
            'System',
            'TextField',
            'TextFormat',
            'Tween',
            'Video',
            'XMLUI',
            'XMLNode',
            'XMLSocket',
            'XML'
            ),
        4 => array (    
            'isactive',
            'updateProperties'
            ),
        5 => array (    
            'callee',
            'caller',
            ),
        6 => array (    
            'concat',
            'join',
            'pop',
            'push',
            'reverse',
            'shift',
            'slice',
            'sort',
            'sortOn',
            'splice',
            'toString',
            'unshift'
            ),
        7 => array (
            'valueOf'
            ),
        8 => array (    
            'onDragOut',
            'onDragOver',
            'onKeyUp',
            'onKillFocus',
            'onPress',
            'onRelease',
            'onReleaseOutside',
            'onRollOut',
            'onRollOver',
            'onSetFocus'
            ),
        9 => array (    
            'setMode',
            'setMotionLevel',
            'setQuality',
            'activityLevel',
            'bandwidth',
            'currentFps',
            'fps',
            'index',
            'motionLevel',
            'motionTimeOut',
            'muted',
            'names',
            'quality',
            'onActivity',
            'onStatus'
            ),
        10 => array (    
            'getRGB',
            'setRGB',
            'getTransform',
            'setTransform'
            ),
        11 => array (    
            'caption',
            'enabled',
            'separatorBefore',
            'visible',
            'onSelect'
            ),
        12 => array (    
            'setCookie',
            'getcookie'
            ),    
        13 => array (    
            'hideBuiltInItems',
            'builtInItems',
            'customItems',
            'onSelect'
            ),
        14 => array (    
            'CustomActions.get',
            'CustomActions.install',
            'CustomActions.list',
            'CustomActions.uninstall',
            ),        
        15 => array (    
            'getDate',
            'getDay',
            'getFullYear',
            'getHours',
            'getMilliseconds',
            'getMinutes',
            'getMonth',
            'getSeconds',
            'getTime',
            'getTimezoneOffset',
            'getUTCDate',
            'getUTCDay',
            'getUTCFullYear',
            'getUTCHours',
            'getUTCMinutes',
            'getUTCMilliseconds',
            'getUTCMonth',
            'getUTCSeconds',
            'getYear',
            'setDate',
            'setFullYear',
            'setHours',
            'setMilliseconds',
            'setMinutes',
            'setMonth',
            'setSeconds',
            'setTime',
            'setUTCDate',
            'setUTCDay',
            'setUTCFullYear',
            'setUTCHours',
            'setUTCMinutes',
            'setUTCMilliseconds',
            'setUTCMonth',
            'setUTCSeconds',
            'setYear',
            'UTC'
            ),    
        16 => array (    
            'message',
            'name',
            'throw',
            'try',
            'catch',
            'finally'
            ),
        17 => array (    
            'apply',
            'call'
            ),
        18 => array (    
            'BACKSPACE',
            'CAPSLOCK',
            'CONTROL',
            'DELETEKEY',
            'DOWN',
            'END',
            'ENTER',
            'ESCAPE',
            'getAscii',
            'getCode',
            'HOME',
            'INSERT',
            'isDown',
            'isToggled',
            'LEFT',
            'onKeyDown',
            'onKeyUp',
            'PGDN',
            'PGUP',
            'RIGHT',
            'SPACE',
            'TAB',
            'UP'
            ),
        19 => array (
            'addRequestHeader',
            'contentType',
            'decode'
            ),
        20 => array (
            'allowDomain',
            'allowInsecureDomain',
            'close',
            'domain'
            ),
        21 => array (
            'abs',
            'acos',
            'asin',
            'atan',
            'atan2',
            'ceil',
            'cos',
            'exp',
            'floor',
            'log',
            'LN2',
            'LN10',
            'LOG2E',
            'LOG10E',
            'max',
            'min',
            'PI',
            'pow',
            'random',
            'sin',
            'SQRT1_2',
            'sqrt',
            'tan',
            'round',
            'SQRT2'
            ),
        22 => array (
            'activityLevel',
            'muted',
            'names',
            'onActivity',
            'onStatus',
            'setRate',
            'setGain',
            'gain',
            'rate',
            'setSilenceLevel',
            'setUseEchoSuppression',
            'silenceLevel',
            'silenceTimeOut',
            'useEchoSuppression'
            ),
        23 => array (
            'hide',
            'onMouseDown',
            'onMouseMove',
            'onMouseUp',
            'onMouseWeel',
            'show'
            ),
        24 => array (
            '_alpha',
            'attachAudio',
            'attachMovie',
            'beginFill',
            'beginGradientFill',
            'clear',
            'createEmptyMovieClip',
            'createTextField',
            '_current',
            'curveTo',
            '_dropTarget',
            'duplicateMovieClip',
            'endFill',
            'focusEnabled',
            'enabled',
            '_focusrec',
            '_framesLoaded',
            'getBounds',
            'getBytesLoaded',
            'getBytesTotal',
            'getDepth',
            'getInstanceAtDepth',
            'getNextHighestDepth',
            'getSWFVersion',
            'getTextSnapshot',
            'getURL',
            'globalToLocal',
            'gotoAndPlay',
            'gotoAndStop',
            '_height',
            'hitArea',
            'hitTest',
            'lineStyle',
            'lineTo',
            'localToGlobal',
            '_lockroot',
            'menu',
            'onUnload',
            '_parent',
            'play',
            'prevFrame',
            '_quality',
            'removeMovieClip',
            '_rotation',
            'setMask',
            '_soundbuftime',
            'startDrag',
            'stopDrag',
            'stop',
            'swapDepths',
            'tabChildren',
            '_target',
            '_totalFrames',
            'trackAsMenu',
            'unloadMovie',
            'useHandCursor',
            '_visible',
            '_width',
            '_xmouse',
            '_xscale',
            '_x',
            '_ymouse',
            '_yscale',
            '_y'
            ),
        25 => array (
            'getProgress',
            'loadClip',
            'onLoadComplete',
            'onLoadError',
            'onLoadInit',
            'onLoadProgress',
            'onLoadStart'
            ),
        26 => array (
            'bufferLength',
            'currentFps',
            'seek',
            'setBufferTime',
            'bufferTime',
            'time',
            'pause'
            ),
        27 => array (
            'MAX_VALUE',
            'MIN_VALUE',
            'NEGATIVE_INFINITY',
            'POSITIVE_INFINITY'
            ),
        28 => array (
            'addProperty',
            'constructor',
            '__proto__',
            'registerClass',
            '__resolve',
            'unwatch',
            'watch',
            'onUpDate'
            ),
        29 => array (
            'addPage'
            ),
        30 => array (
            'getBeginIndex',
            'getCaretIndex',
            'getEndIndex',
            'setSelection'
            ),
        31 => array (
            'flush',
            'getLocal',
            'getSize'
            ),
        32 => array (
            'attachSound',
            'duration',
            'getPan',
            'getVolume',
            'onID3',
            'loadSound',
            'id3',
            'onSoundComplete',
            'position',
            'setPan',
            'setVolume'
            ),
        33 => array (
            'getBeginIndex',
            'getCaretIndex',
            'getEndIndex',
            'setSelection'
            ),
        34 => array (
            'getEndIndex',
            ),
        35 => array (
            'align',
            'height',
            'width',
            'onResize',
            'scaleMode',
            'showMenu'
            ),
        36 => array (
            'charAt',
            'charCodeAt',
            'concat',
            'fromCharCode',
            'indexOf',
            'lastIndexOf',
            'substr',
            'substring',
            'toLowerCase',
            'toUpperCase'
            ),
        37 => array (
            'avHardwareDisable',
            'hasAccessibility',
            'hasAudioEncoder',
            'hasAudio',
            'hasEmbeddedVideo',
            'hasMP3',
            'hasPrinting',
            'hasScreenBroadcast',
            'hasScreenPlayback',
            'hasStreamingAudio',
            'hasStreamingVideo',
            'hasVideoEncoder',
            'isDebugger',
            'language',
            'localFileReadDisable',
            'manufacturer',
            'os',
            'pixelAspectRatio',
            'playerType',
            'screenColor',
            'screenDPI',
            'screenResolutionX',
            'screenResolutionY',
            'serverString',
            'version'
            ),
        38 => array (
            'allowDomain',
            'allowInsecureDomain',
            'loadPolicyFile'
            ),
        39 => array (
            'exactSettings',
            'setClipboard',
            'showSettings',
            'useCodepage'
            ),
        40 => array (
            'getStyle',
            'getStyleNames',
            'parseCSS',
            'setStyle',
            'transform'
            ),
        41 => array (
            'autoSize',
            'background',
            'backgroundColor',
            'border',
            'borderColor',
            'bottomScroll',
            'condenseWhite',
            'embedFonts',
            'getFontList',
            'getNewTextFormat',
            'getTextFormat',
            'hscroll',
            'htmlText',
            'html',
            'maxChars',
            'maxhscroll',
            'maxscroll',
            'mouseWheelEnabled',
            'multiline',
            'onScroller',
            'password',
            'removeTextField',
            'replaceSel',
            'replaceText',
            'restrict',
            'scroll',
            'selectable',
            'setNewTextFormat',
            'setTextFormat',
            'styleSheet',
            'tabEnabled',
            'tabIndex',
            'textColor',
            'textHeight',
            'textWidth',
            'text',
            'type',
            '_url',
            'variable',
            'wordWrap'
            ),
        42 => array (    
            'blockIndent',
            'bold',
            'bullet',
            'font',
            'getTextExtent',
            'indent',
            'italic',
            'leading',
            'leftMargin',
            'rightMargin',
            'size',
            'tabStops',
            'underline'
            ),
        43 => array (    
            'findText',
            'getCount',
            'getSelected',
            'getSelectedText',
            'getText',
            'hitTestTextNearPos',
            'setSelectColor',
            'setSelected'
            ),
        44 => array (    
            'begin',
            'change',
            'continueTo',
            'fforward',
            'finish',
            'func',
            'FPS',
            'getPosition',
            'isPlaying',
            'looping',
            'obj',
            'onMotionChanged',
            'onMotionFinished',
            'onMotionLooped',
            'onMotionStarted',
            'onMotionResumed',
            'onMotionStopped',
            'prop',
            'rewind',
            'resume',
            'setPosition',
            'time',
            'userSeconds',
            'yoyo'
            ),
        45 => array (    
            'attachVideo',
            'deblocking',
            'smoothing'
            ),
        46 => array (    
            'addRequestHeader',
            'appendChild',
            'attributes',
            'childNodes',
            'cloneNode',
            'contentType',
            'createElement',
            'createTextNode',
            'docTypeDecl',
            'firstChild',
            'hasChildNodes',
            'ignoreWhite',
            'insertBefore',
            'lastChild',
            'nextSibling',
            'nodeName',
            'nodeType',
            'nodeValue',
            'parentNode',
            'parseXML',
            'previousSibling',
            'removeNode',
            'xmlDecl'
            ),
        47 => array (    
            'onClose',
            'onXML'
            ),
        48 => array (    
            'add',
            'and',
            '_highquality',
            'chr',
            'eq',
            'ge',
            'ifFrameLoaded',
            'int',
            'le',
            'it',
            'mbchr',
            'mblength',
            'mbord',
            'ne',
            'not',
            'or',
            'ord',
            'tellTarget',
            'toggleHighQuality'
            ),
        49 => array (
            'ASSetPropFlags',
            'ASnative',
            'ASconstructor',
            'AsSetupError',
            'FWEndCommand',
            'FWJavascript',
            'MMEndCommand',
            'MMSave',
            'XMLUI'
        ), 
        50 => array (
            'System.capabilities'
        ),
        51 => array (
            'System.security'
        ),
        52 => array (
            'TextField.StyleSheet'
        )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '!', '@', '%', '&', '*', '|', '/', '<', '>','='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true,
        9 => true,
        10 => true,
        11 => true,
        12 => true,
        13 => true,
        14 => true,
        15 => true,
        16 => true,
        17 => true,
        18 => true,
        19 => true,
        20 => true,
        21 => true,
        22 => true,
        23 => true,
        24 => true,
        25 => true,
        26 => true,
        27 => true,
        28 => true,
        29 => true,
        30 => true,
        31 => true,
        32 => true,
        33 => true,
        34 => true,
        35 => true,
        36 => true,
        37 => true,
        38 => true,
        39 => true,
        40 => true,
        41 => true,
        42 => true,
        43 => true,
        44 => true,
        45 => true,
        46 => true,
        47 => true,
        48 => true,
        49 => true,
        50 => true,
        51 => true,
        52 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #006600;',
            3 => 'color: #000080;',
            4 => 'color: #006600;',
            5 => 'color: #006600;',
            6 => 'color: #006600;',
            7 => 'color: #006600;',
            8 => 'color: #006600;',
            9 => 'color: #006600;',
            10 => 'color: #006600;',
            11 => 'color: #006600;',
            12 => 'color: #006600;',
            13 => 'color: #006600;',
            14 => 'color: #006600;',
            15 => 'color: #006600;',
            16 => 'color: #006600;',
            17 => 'color: #006600;',
            18 => 'color: #006600;',
            19 => 'color: #006600;',
            20 => 'color: #006600;',
            21 => 'color: #006600;',
            22 => 'color: #006600;',
            23 => 'color: #006600;',
            24 => 'color: #006600;',
            25 => 'color: #006600;',
            26 => 'color: #006600;',
            27 => 'color: #006600;',
            28 => 'color: #006600;',
            29 => 'color: #006600;',
            30 => 'color: #006600;',
            31 => 'color: #006600;',
            32 => 'color: #006600;',
            33 => 'color: #006600;',
            34 => 'color: #006600;',
            35 => 'color: #006600;',
            36 => 'color: #006600;',
            37 => 'color: #006600;',
            38 => 'color: #006600;',
            39 => 'color: #006600;',
            40 => 'color: #006600;',
            41 => 'color: #006600;',
            42 => 'color: #006600;',
            43 => 'color: #006600;',
            44 => 'color: #006600;',
            45 => 'color: #006600;',
            46 => 'color: #006600;',
            47 => 'color: #006600;',
            48 => 'color: #CC0000;',
            49 => 'color: #5700d1;',
            50 => 'color: #006600;',
            51 => 'color: #006600;',
            52 => 'color: #CC0000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #ff8000; font-style: italic;',
            2 => 'color: #ff8000; font-style: italic;',
            'MULTI' => 'color: #ff8000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #333333;'
            ),
        'STRINGS' => array(
            0 => 'color: #333333; background-color: #eeeeee;'
            ),
        'NUMBERS' => array(
            0 => 'color: #c50000;'
            ),

        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://wiki.media-box.net/documentation/flash/{FNAME}',
        2 => 'http://wiki.media-box.net/documentation/flash/{FNAME}',
        3 => 'http://wiki.media-box.net/documentation/flash/{FNAME}',
        4 => 'http://wiki.media-box.net/documentation/flash/accessibility/{FNAME}',
        5 => 'http://wiki.media-box.net/documentation/flash/arguments/{FNAME}',
        6 => 'http://wiki.media-box.net/documentation/flash/array/{FNAME}',
        7 => 'http://wiki.media-box.net/documentation/flash/boolean/{FNAME}',
        8 => 'http://wiki.media-box.net/documentation/flash/button/{FNAME}',
        9 => 'http://wiki.media-box.net/documentation/flash/camera/{FNAME}',
        10 => 'http://wiki.media-box.net/documentation/flash/color/{FNAME}',
        11 => 'http://wiki.media-box.net/documentation/flash/contextmenuitem/{FNAME}',
        12 => 'http://wiki.media-box.net/documentation/flash/contextmenu/{FNAME}',
        13 => 'http://wiki.media-box.net/documentation/flash/cookie/{FNAME}',
        14 => 'http://wiki.media-box.net/documentation/flash/customactions/{FNAME}',
        15 => 'http://wiki.media-box.net/documentation/flash/date/{FNAME}',
        16 => 'http://wiki.media-box.net/documentation/flash/error/{FNAME}',
        17 => 'http://wiki.media-box.net/documentation/flash/function/{FNAME}',
        18 => 'http://wiki.media-box.net/documentation/flash/key/{FNAME}',
        19 => 'http://wiki.media-box.net/documentation/flash/loadvars/{FNAME}',
        20 => 'http://wiki.media-box.net/documentation/flash/localconnection/{FNAME}',
        21 => 'http://wiki.media-box.net/documentation/flash/math/{FNAME}',
        22 => 'http://wiki.media-box.net/documentation/flash/microphone/{FNAME}',
        23 => 'http://wiki.media-box.net/documentation/flash/mouse/{FNAME}',
        24 => 'http://wiki.media-box.net/documentation/flash/movieclip/{FNAME}',
        25 => 'http://wiki.media-box.net/documentation/flash/moviecliploader/{FNAME}',
        26 => 'http://wiki.media-box.net/documentation/flash/netstream/{FNAME}',
        27 => 'http://wiki.media-box.net/documentation/flash/number/{FNAME}',
        28 => 'http://wiki.media-box.net/documentation/flash/object/{FNAME}',
        29 => 'http://wiki.media-box.net/documentation/flash/printJob/{FNAME}',
        30 => 'http://wiki.media-box.net/documentation/flash/selection/{FNAME}',
        31 => 'http://wiki.media-box.net/documentation/flash/sharedobject/{FNAME}',
        32 => 'http://wiki.media-box.net/documentation/flash/sound/{FNAME}',
        33 => 'http://wiki.media-box.net/documentation/flash/selection/{FNAME}',
        34 => 'http://wiki.media-box.net/documentation/flash/sharedobject/{FNAME}',
        35 => 'http://wiki.media-box.net/documentation/flash/stage/{FNAME}',
        36 => 'http://wiki.media-box.net/documentation/flash/string/{FNAME}',
        37 => 'http://wiki.media-box.net/documentation/flash/system/capabilities/{FNAME}',
        38 => 'http://wiki.media-box.net/documentation/flash/system/security/{FNAME}',
        39 => 'http://wiki.media-box.net/documentation/flash/system/{FNAME}',
        40 => 'http://wiki.media-box.net/documentation/flash/textfield/stylesheet/{FNAME}',
        41 => 'http://wiki.media-box.net/documentation/flash/textfield/{FNAME}',
        42 => 'http://wiki.media-box.net/documentation/flash/textformat/{FNAME}',
        43 => 'http://wiki.media-box.net/documentation/flash/textsnapshot/{FNAME}',
        44 => 'http://wiki.media-box.net/documentation/flash/tween/{FNAME}',
        45 => 'http://wiki.media-box.net/documentation/flash/video/{FNAME}',
        46 => 'http://wiki.media-box.net/documentation/flash/xml/{FNAME}',
        47 => 'http://wiki.media-box.net/documentation/flash/xmlsocket/{FNAME}',
        48 => 'http://wiki.media-box.net/documentation/flash/{FNAME}',
        49 => 'http://wiki.media-box.net/documentation/flash/{FNAME}',
        50 => 'http://wiki.media-box.net/documentation/flash/system/capabilities',
        51 => 'http://wiki.media-box.net/documentation/flash/system/security',
        52 => 'http://wiki.media-box.net/documentation/flash/textfield/stylesheet'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>
