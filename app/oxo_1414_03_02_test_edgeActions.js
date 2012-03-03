/***********************
* Adobe Edge Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

//Edge symbol: 'stage'
(function(symbolName) {


Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 23000, function(sym, e) {
// play the timeline from the given position (ms or label)
sym.play(1);

});
//Edge binding end



Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function defaultTriggerBinding(e) {

});
//Edge binding end








Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 12776, function(sym, e) {
// play the timeline from the given position (ms or label)
sym.play("loop_01");
// insert code here

});
//Edge binding end









})("stage");
//Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-29942816");