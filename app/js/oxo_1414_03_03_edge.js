/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
var fonts = {
};
var symbols = {
"stage": {
   version: "0.1.4",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: true,
   content: {
      dom: [
        {
            id:'kremlin',
            className:'stage_kremlin_id',
            type:'image',
            rect:[682.24114990234,732.25031280518,1280,1024],
            opacity:0.51369863013699,
            fill:['rgba(0,0,0,0)','images/kremlin.png'],
            transform:[[-682.44911,-732.34813],,,[0.99921,0.99921]]
        },
        {
            id:'flash_light23',
            className:'stage_flash_light23_id',
            type:'image',
            rect:[955.86724853516,469.42188262939,428,530],
            fill:['rgba(0,0,0,0)','images/flash_light2.png'],
            transform:[[-361.99995,-357.99997]]
        },
        {
            id:'flash_light24',
            className:'flash_light23Copy_id',
            type:'image',
            rect:[955.86724853516,469.42188262939,428,530],
            fill:['rgba(0,0,0,0)','images/flash_light2.png'],
            transform:[[-646.76584,-348.6166],[-71]]
        },
        {
            id:'black02',
            className:'stage_black02_id',
            type:'image',
            rect:[0,0,1280,1024],
            fill:['rgba(0,0,0,0)','images/black02.png']
        },
        {
            id:'red_shadow',
            className:'stage_red_shadow_id',
            type:'image',
            rect:[0,0,1280,1024],
            fill:['rgba(0,0,0,0)','images/red_shadow.png'],
            transform:[]
        },
        {
            id:'title',
            className:'stage_title_id',
            type:'image',
            rect:[0,0,342,209],
            fill:['rgba(0,0,0,0)','images/title.png']
        },
        {
            id:'stars_title22',
            className:'stage_stars_title22_id',
            type:'image',
            rect:[633.85739135742,150.30218505859,320,170],
            opacity:1,
            fill:['rgba(0,0,0,0)','images/stars_title2.png'],
            transform:[[-148.12012,-144.30221]]
        },
        {
            id:'flash_bang_title2',
            className:'stage_flash_bang_title2_id',
            type:'image',
            rect:[0,0,320,170],
            fill:['rgba(0,0,0,0)','images/flash_bang_title2.png'],
            transform:[[485.99999,6]]
        },
        {
            id:'star_012',
            className:'stage_star_012_id',
            type:'image',
            rect:[0,0,165,166],
            fill:['rgba(0,0,0,0)','images/star_012.png'],
            transform:[[421.00001,5.99999],[360]]
        },
        {
            id:'star_01',
            className:'stage_star_01_id',
            type:'image',
            rect:[775.46282958984,157.21447753906,165,166],
            fill:['rgba(0,0,0,0)','images/star_01.png'],
            transform:[[-88.84381,-121.52778]]
        },
        {
            id:'star_013',
            className:'stage_star_013_id',
            type:'image',
            rect:[697.34539794922,298.04742431641,165,166],
            fill:['rgba(0,0,0,0)','images/star_01.png'],
            transform:[[-167.89563,-223.12491]]
        }],
      symbolInstances: [

      ]
   },
   states: {
      "Base State": {
         "${_star_013}": [
            ["transform", "translateY", '-223.12491px'],
            ["style", "opacity", '0'],
            ["transform", "translateX", '-167.89563px'],
            ["transform", "rotateZ", '0deg']
         ],
         "${_stars_title22}": [
            ["transform", "scaleY", '1'],
            ["transform", "scaleX", '1'],
            ["style", "opacity", '1'],
            ["transform", "translateY", '-144.30221px'],
            ["transform", "translateX", '-148.12012px']
         ],
         "${_stage}": [
            ["color", "background-color", 'rgba(0,0,0,1.00)'],
            ["style", "height", '1022px'],
            ["style", "width", '1278px']
         ],
         "${_red_shadow}": [
            ["style", "opacity", '0.46216823630137']
         ],
         "${_kremlin}": [
            ["transform", "translateX", '-682.44911px'],
            ["transform", "scaleY", '0.99921'],
            ["transform", "scaleX", '0.99921'],
            ["style", "height", '1023px'],
            ["style", "opacity", '0'],
            ["transform", "translateY", '-732.34813px'],
            ["style", "width", '1279px']
         ],
         "${_star_01}": [
            ["transform", "translateY", '-121.52778px'],
            ["style", "opacity", '0'],
            ["transform", "translateX", '-88.84381px'],
            ["transform", "rotateZ", '0deg']
         ],
         "${_flash_bang_title2}": [
            ["style", "opacity", '0'],
            ["transform", "translateY", '6px'],
            ["transform", "translateX", '485.99999px']
         ],
         "${_star_012}": [
            ["transform", "translateY", '5.99999px'],
            ["style", "opacity", '0'],
            ["transform", "translateX", '421.00001px'],
            ["transform", "rotateZ", '0deg']
         ],
         "${_flash_light23}": [
            ["style", "opacity", '0'],
            ["transform", "translateY", '-357.99997px'],
            ["transform", "translateX", '-361.99995px']
         ],
         "${_flash_light24}": [
            ["transform", "translateY", '-348.6166px'],
            ["style", "opacity", '0'],
            ["transform", "translateX", '-646.76584px'],
            ["transform", "rotateZ", '-71deg']
         ],
         "${_title}": [
            ["transform", "translateX", '485.7584px'],
            ["transform", "translateY", '5.82141px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 23000,
         autoPlay: true,
         labels: {
            "loop_01": 2390.9428182639
         },
         timeline: [
            { id: "eid837", tween: [ "style", "${_red_shadow}", "opacity", '0.46216823630137', { fromValue: '0.46216823630137'}], position: 0, duration: 0 },
            { id: "eid1091", tween: [ "transform", "${_star_012}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 2390, duration: 1000 },
            { id: "eid1376", tween: [ "transform", "${_star_012}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 5377, duration: 1000 },
            { id: "eid1393", tween: [ "transform", "${_star_012}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 8382, duration: 1000 },
            { id: "eid1102", tween: [ "transform", "${_star_01}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 3203, duration: 1000 },
            { id: "eid1371", tween: [ "transform", "${_star_01}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 6190, duration: 1000 },
            { id: "eid1388", tween: [ "transform", "${_star_01}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 9195, duration: 1000 },
            { id: "eid1115", tween: [ "style", "${_star_013}", "opacity", '1', { fromValue: '0'}], position: 4107, duration: 501 },
            { id: "eid1116", tween: [ "style", "${_star_013}", "opacity", '0', { fromValue: '1'}], position: 4608, duration: 492 },
            { id: "eid1363", tween: [ "style", "${_star_013}", "opacity", '1', { fromValue: '0'}], position: 7094, duration: 501 },
            { id: "eid1367", tween: [ "style", "${_star_013}", "opacity", '0', { fromValue: '1'}], position: 7595, duration: 492 },
            { id: "eid1380", tween: [ "style", "${_star_013}", "opacity", '1', { fromValue: '0'}], position: 10099, duration: 501 },
            { id: "eid1384", tween: [ "style", "${_star_013}", "opacity", '0', { fromValue: '1'}], position: 10600, duration: 492 },
            { id: "eid1120", tween: [ "transform", "${_star_01}", "translateY", '-94.95865px', { fromValue: '-121.52778px'}], position: 3202, duration: 501 },
            { id: "eid1122", tween: [ "transform", "${_star_01}", "translateY", '-73.75083px', { fromValue: '-94.95865px'}], position: 3703, duration: 499 },
            { id: "eid1368", tween: [ "transform", "${_star_01}", "translateY", '-94.95865px', { fromValue: '-121.52778px'}], position: 6189, duration: 501 },
            { id: "eid1372", tween: [ "transform", "${_star_01}", "translateY", '-73.75083px', { fromValue: '-94.95865px'}], position: 6690, duration: 499 },
            { id: "eid1385", tween: [ "transform", "${_star_01}", "translateY", '-94.95865px', { fromValue: '-121.52778px'}], position: 9194, duration: 501 },
            { id: "eid1389", tween: [ "transform", "${_star_01}", "translateY", '-73.75083px', { fromValue: '-94.95865px'}], position: 9695, duration: 499 },
            { id: "eid1123", tween: [ "transform", "${_star_013}", "translateX", '-92.7621px', { fromValue: '-167.89563px'}], position: 4107, duration: 1001 },
            { id: "eid1364", tween: [ "transform", "${_star_013}", "translateX", '-92.7621px', { fromValue: '-167.89563px'}], position: 7094, duration: 1001 },
            { id: "eid1381", tween: [ "transform", "${_star_013}", "translateX", '-92.7621px', { fromValue: '-167.89563px'}], position: 10099, duration: 1001 },
            { id: "eid1111", tween: [ "style", "${_star_01}", "opacity", '1', { fromValue: '0'}], position: 3202, duration: 501 },
            { id: "eid1112", tween: [ "style", "${_star_01}", "opacity", '0', { fromValue: '1'}], position: 3703, duration: 500 },
            { id: "eid1369", tween: [ "style", "${_star_01}", "opacity", '1', { fromValue: '0'}], position: 6189, duration: 501 },
            { id: "eid1373", tween: [ "style", "${_star_01}", "opacity", '0', { fromValue: '1'}], position: 6690, duration: 500 },
            { id: "eid1386", tween: [ "style", "${_star_01}", "opacity", '1', { fromValue: '0'}], position: 9194, duration: 501 },
            { id: "eid1390", tween: [ "style", "${_star_01}", "opacity", '0', { fromValue: '1'}], position: 9695, duration: 500 },
            { id: "eid1113", tween: [ "transform", "${_star_013}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 4107, duration: 1001 },
            { id: "eid1366", tween: [ "transform", "${_star_013}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 7094, duration: 1001 },
            { id: "eid1383", tween: [ "transform", "${_star_013}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 10099, duration: 1001 },
            { id: "eid1117", tween: [ "transform", "${_star_012}", "translateX", '446.47987px', { fromValue: '421.00001px'}], position: 2390, duration: 999 },
            { id: "eid1377", tween: [ "transform", "${_star_012}", "translateX", '446.47987px', { fromValue: '421.00001px'}], position: 5377, duration: 999 },
            { id: "eid1394", tween: [ "transform", "${_star_012}", "translateX", '446.47987px', { fromValue: '421.00001px'}], position: 8382, duration: 999 },
            { id: "eid1402", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 0, duration: 804 },
            { id: "eid1403", tween: [ "style", "${_flash_light23}", "opacity", '0', { fromValue: '0.24170590753425'}], position: 804, duration: 866 },
            { id: "eid1464", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 1670, duration: 839 },
            { id: "eid1501", tween: [ "style", "${_flash_light23}", "opacity", '0', { fromValue: '0.24170590753425'}], position: 2509, duration: 866 },
            { id: "eid1502", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 3375, duration: 839 },
            { id: "eid1507", tween: [ "style", "${_flash_light23}", "opacity", '0', { fromValue: '0.24170590753425'}], position: 4214, duration: 866 },
            { id: "eid1508", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 5080, duration: 839 },
            { id: "eid1513", tween: [ "style", "${_flash_light23}", "opacity", '0', { fromValue: '0.24170590753425'}], position: 5920, duration: 866 },
            { id: "eid1514", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 6786, duration: 839 },
            { id: "eid1519", tween: [ "style", "${_flash_light23}", "opacity", '0', { fromValue: '0.24170590753425'}], position: 7625, duration: 866 },
            { id: "eid1520", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 8491, duration: 839 },
            { id: "eid1525", tween: [ "style", "${_flash_light23}", "opacity", '0', { fromValue: '0.24170590753425'}], position: 9331, duration: 866 },
            { id: "eid1526", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 10197, duration: 839 },
            { id: "eid1531", tween: [ "style", "${_flash_light23}", "opacity", '0', { fromValue: '0.24170590753425'}], position: 11036, duration: 866 },
            { id: "eid1532", tween: [ "style", "${_flash_light23}", "opacity", '0.24170590753425', { fromValue: '0'}], position: 11902, duration: 839 },
            { id: "eid145", tween: [ "transform", "${_title}", "translateY", '5.82141px', { fromValue: '5.82141px'}], position: 0, duration: 0 },
            { id: "eid1119", tween: [ "transform", "${_star_01}", "translateX", '-95.62174px', { fromValue: '-88.84381px'}], position: 3202, duration: 501 },
            { id: "eid1121", tween: [ "transform", "${_star_01}", "translateX", '-121.94329px', { fromValue: '-95.62174px'}], position: 3703, duration: 499 },
            { id: "eid1370", tween: [ "transform", "${_star_01}", "translateX", '-95.62174px', { fromValue: '-88.84381px'}], position: 6189, duration: 501 },
            { id: "eid1374", tween: [ "transform", "${_star_01}", "translateX", '-121.94329px', { fromValue: '-95.62174px'}], position: 6690, duration: 499 },
            { id: "eid1387", tween: [ "transform", "${_star_01}", "translateX", '-95.62174px', { fromValue: '-88.84381px'}], position: 9194, duration: 501 },
            { id: "eid1391", tween: [ "transform", "${_star_01}", "translateX", '-121.94329px', { fromValue: '-95.62174px'}], position: 9695, duration: 499 },
            { id: "eid1118", tween: [ "transform", "${_star_012}", "translateY", '-47.4835px', { fromValue: '5.99999px'}], position: 2390, duration: 999 },
            { id: "eid1378", tween: [ "transform", "${_star_012}", "translateY", '-47.4835px', { fromValue: '5.99999px'}], position: 5377, duration: 999 },
            { id: "eid1395", tween: [ "transform", "${_star_012}", "translateY", '-47.4835px', { fromValue: '5.99999px'}], position: 8382, duration: 999 },
            { id: "eid1068", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 2582, duration: 877 },
            { id: "eid1069", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 3465, duration: 877 },
            { id: "eid1072", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 6036, duration: 866 },
            { id: "eid1073", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 6910, duration: 866 },
            { id: "eid1535", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 9695, duration: 866 },
            { id: "eid1536", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 10569, duration: 866 },
            { id: "eid1026", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 15164, duration: 124 },
            { id: "eid1027", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 15289, duration: 124 },
            { id: "eid1028", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 15414, duration: 124 },
            { id: "eid1029", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 15539, duration: 124 },
            { id: "eid1030", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 16967, duration: 124 },
            { id: "eid1031", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 17092, duration: 124 },
            { id: "eid1032", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 17217, duration: 124 },
            { id: "eid1033", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 17342, duration: 124 },
            { id: "eid1034", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 18477, duration: 124 },
            { id: "eid1035", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 18602, duration: 124 },
            { id: "eid1036", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 18727, duration: 124 },
            { id: "eid1037", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 18852, duration: 124 },
            { id: "eid1038", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 20399, duration: 124 },
            { id: "eid1039", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 20524, duration: 124 },
            { id: "eid1040", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 20649, duration: 124 },
            { id: "eid1041", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 20774, duration: 124 },
            { id: "eid1042", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 21835, duration: 124 },
            { id: "eid1043", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 21960, duration: 124 },
            { id: "eid1044", tween: [ "style", "${_kremlin}", "opacity", '1', { fromValue: '0'}], position: 22085, duration: 124 },
            { id: "eid1045", tween: [ "style", "${_kremlin}", "opacity", '0', { fromValue: '1'}], position: 22210, duration: 124 },
            { id: "eid1405", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 0, duration: 804 },
            { id: "eid1406", tween: [ "style", "${_flash_light24}", "opacity", '0', { fromValue: '0.24'}], position: 804, duration: 866 },
            { id: "eid1463", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 1670, duration: 839 },
            { id: "eid1499", tween: [ "style", "${_flash_light24}", "opacity", '0', { fromValue: '0.24'}], position: 2509, duration: 866 },
            { id: "eid1500", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 3375, duration: 839 },
            { id: "eid1505", tween: [ "style", "${_flash_light24}", "opacity", '0', { fromValue: '0.24'}], position: 4214, duration: 866 },
            { id: "eid1506", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 5080, duration: 839 },
            { id: "eid1511", tween: [ "style", "${_flash_light24}", "opacity", '0', { fromValue: '0.24'}], position: 5920, duration: 866 },
            { id: "eid1512", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 6786, duration: 839 },
            { id: "eid1517", tween: [ "style", "${_flash_light24}", "opacity", '0', { fromValue: '0.24'}], position: 7625, duration: 866 },
            { id: "eid1518", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 8491, duration: 839 },
            { id: "eid1523", tween: [ "style", "${_flash_light24}", "opacity", '0', { fromValue: '0.24'}], position: 9331, duration: 866 },
            { id: "eid1524", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 10197, duration: 839 },
            { id: "eid1529", tween: [ "style", "${_flash_light24}", "opacity", '0', { fromValue: '0.24'}], position: 11036, duration: 866 },
            { id: "eid1530", tween: [ "style", "${_flash_light24}", "opacity", '0.24', { fromValue: '0'}], position: 11902, duration: 839 },
            { id: "eid144", tween: [ "transform", "${_title}", "translateX", '485.7584px', { fromValue: '485.7584px'}], position: 0, duration: 0 },
            { id: "eid1093", tween: [ "style", "${_star_012}", "opacity", '1', { fromValue: '0'}], position: 2390, duration: 544 },
            { id: "eid1095", tween: [ "style", "${_star_012}", "opacity", '0', { fromValue: '1'}], position: 2934, duration: 455 },
            { id: "eid1375", tween: [ "style", "${_star_012}", "opacity", '1', { fromValue: '0'}], position: 5377, duration: 544 },
            { id: "eid1379", tween: [ "style", "${_star_012}", "opacity", '0', { fromValue: '1'}], position: 5921, duration: 455 },
            { id: "eid1392", tween: [ "style", "${_star_012}", "opacity", '1', { fromValue: '0'}], position: 8382, duration: 544 },
            { id: "eid1396", tween: [ "style", "${_star_012}", "opacity", '0', { fromValue: '1'}], position: 8926, duration: 455 },
            { id: "eid1124", tween: [ "transform", "${_star_013}", "translateY", '-207.9151px', { fromValue: '-223.12491px'}], position: 4107, duration: 1001 },
            { id: "eid1365", tween: [ "transform", "${_star_013}", "translateY", '-207.9151px', { fromValue: '-223.12491px'}], position: 7094, duration: 1001 },
            { id: "eid1382", tween: [ "transform", "${_star_013}", "translateY", '-207.9151px', { fromValue: '-223.12491px'}], position: 10099, duration: 1001 }         ]
      }
   }
}
};

Edge.registerCompositionDefn(compId, symbols, fonts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-3752019");
