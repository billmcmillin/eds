<?php

include("sortLCC.php");
class stdObject {
	public function __construct(array $arguments = array()) {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
        }
    }
   public function __call($method, $arguments) {
        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).
        if (isset($this->{$method}) && is_callable($this->{$method})) {
            return call_user_func_array($this->{$method}, $arguments);
        } else {
            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");
        }
    }
}
//variables passed in from linx.js
$callNum = htmlspecialchars($_GET["callNum"]);
$loc = htmlspecialchars($_GET["loc"]);
$subCall = sortNums($callNum);

//result page that is displayed when user clicks on a link
print "<html>";
print "<head>";
print "<style>";
print "p {font: 18px/20px verdana, sans-serif;}";
print ".main {margin-left: auto;
		 margin-right:auto;
		width: 50%;}";
print "</style>";
print "<body>";
print '<div class="main">';
//define locations array
//declare an object for each location and populate it//location "Floor  2 Circulation Desk" A - Z
	$locObj0= new stdObject();
	$locObj0->libName = 'Milner';
	$locObj0->location = "Floor  2 Circulation Desk";
	$locObj0->callNumBegin = 'A';
	$locObj0->callNumEnd = 'Z';
	$locObj0->imageFile = 'floor2range1.gif';


//location "Floor 2 Course Reserve Desk" A - Z
	$locObj1= new stdObject();
	$locObj1->libName = 'Milner';
	$locObj1->location = "Floor 2 Course Reserve Desk";
	$locObj1->callNumBegin = 'A';
	$locObj1->callNumEnd = 'Z';
	$locObj1->imageFile = 'floor2range1.gif';


//location "Floor  2 Course Reserve Desk: Building Use Only" A - Z
	$locObj2= new stdObject();
	$locObj2->libName = 'Milner';
	$locObj2->location = "Floor  2 Course Reserve Desk: Building Use Only";
	$locObj2->callNumBegin = 'A';
	$locObj2->callNumEnd = 'Z';
	$locObj2->imageFile = 'floor2range1.gif';


//location "Floor  2 Current Periodicals: Building Use Only" A - Z
	$locObj3= new stdObject();
	$locObj3->libName = 'Milner';
	$locObj3->location = "Floor  2 Current Periodicals: Building Use Only";
	$locObj3->callNumBegin = 'A';
	$locObj3->callNumEnd = 'Z';
	$locObj3->imageFile = 'floor2range2.gif';


//location "Floor  2 Media" A - Z
	$locObj4= new stdObject();
	$locObj4->libName = 'Milner';
	$locObj4->location = "Floor  2 Media";
	$locObj4->callNumBegin = 'A';
	$locObj4->callNumEnd = 'Z';
	$locObj4->imageFile = 'floor2range3.gif';


//location "Floor 2 Microform Area: Building Use Only" A - Z
	$locObj5= new stdObject();
	$locObj5->libName = 'Milner';
	$locObj5->location = "Floor 2 Microform Area: Building Use Only";
	$locObj5->callNumBegin = 'A';
	$locObj5->callNumEnd = 'Z';
	$locObj5->imageFile = 'floor2range4.gif';


//location "Floor  2 Reference Desk: Building Use Only" A - Z
	$locObj6= new stdObject();
	$locObj6->libName = 'Milner';
	$locObj6->location = "Floor  2 Reference Desk: Building Use Only";
	$locObj6->callNumBegin = 'A';
	$locObj6->callNumEnd = 'Z';
	$locObj6->imageFile = 'floor2range5.gif';


//location "Floor  2 Reference: Building Use Only" A - Z
	$locObj7= new stdObject();
	$locObj7->libName = 'Milner';
	$locObj7->location = "Floor  2 Reference: Building Use Only";
	$locObj7->callNumBegin = 'A';
	$locObj7->callNumEnd = 'Z';
	$locObj7->imageFile = 'floor2range6.gif';


//location "Floor  2 Reference, Microform Indexes: Building Use Only" A - Z
	$locObj8= new stdObject();
	$locObj8->libName = 'Milner';
	$locObj8->location = "Floor  2 Reference, Microform Indexes: Building Use Only";
	$locObj8->callNumBegin = 'A';
	$locObj8->callNumEnd = 'Z';
	$locObj8->imageFile = 'floor2range7.gif';


//location "Floor 2 Documents Pamphlets" A - Z
	$locObj9= new stdObject();
	$locObj9->libName = 'Milner';
	$locObj9->location = "Floor 2 Documents Pamphlets";
	$locObj9->callNumBegin = 'A';
	$locObj9->callNumEnd = 'Z';
	$locObj9->imageFile = 'floor2range7.gif';


//location "Floor 2 Browsing Area" A - Z
	$locObj10= new stdObject();
	$locObj10->libName = 'Milner';
	$locObj10->location = "Floor 2 Browsing Area";
	$locObj10->callNumBegin = 'A';
	$locObj10->callNumEnd = 'Z';
	$locObj10->imageFile = 'floor2range8.gif';


//location "Floor 2 New Books Shelves" A - Z
	$locObj11= new stdObject();
	$locObj11->libName = 'Milner';
	$locObj11->location = "Floor 2 New Books Shelves";
	$locObj11->callNumBegin = 'A';
	$locObj11->callNumEnd = 'Z';
	$locObj11->imageFile = 'floor2range9.gif';


//location "Floor 3 Oversize Shelves" A - F
	$locObj12= new stdObject();
	$locObj12->libName = 'Milner';
	$locObj12->location = "Floor 3 Oversize Shelves";
	$locObj12->callNumBegin = 'A';
	$locObj12->callNumEnd = 'F';
	$locObj12->imageFile = 'floor3range1.gif';


//location "FL3 Oversize Noncirc Shelves" A - F
	$locObj13= new stdObject();
	$locObj13->libName = 'Milner';
	$locObj13->location = "FL3 Oversize Noncirc Shelves";
	$locObj13->callNumBegin = 'A';
	$locObj13->callNumEnd = 'F';
	$locObj13->imageFile = 'floor3range1.gif';


//location "Floor 3 Shelves" A - C
	$locObj14= new stdObject();
	$locObj14->libName = 'Milner';
	$locObj14->location = "Floor 3 Shelves";
	$locObj14->callNumBegin = 'A';
	$locObj14->callNumEnd = 'C';
	$locObj14->imageFile = 'floor3range2.gif';


//location "Floor 3 Shelves" D - E99.C6 D
	$locObj15= new stdObject();
	$locObj15->libName = 'Milner';
	$locObj15->location = "Floor 3 Shelves";
	$locObj15->callNumBegin = 'D';
	$locObj15->callNumEnd = 'E99.C6 D';
	$locObj15->imageFile = 'floor3range3.gif';


//location "Floor 3 Shelves" E99.C6 E - F
	$locObj16= new stdObject();
	$locObj16->libName = 'Milner';
	$locObj16->location = "Floor 3 Shelves";
	$locObj16->callNumBegin = 'E99.C6 E';
	$locObj16->callNumEnd = 'F';
	$locObj16->imageFile = 'floor3range4.gif';


//location "Floor 3 Shelves: Building Use Only" A - C
	$locObj17= new stdObject();
	$locObj17->libName = 'Milner';
	$locObj17->location = "Floor 3 Shelves: Building Use Only";
	$locObj17->callNumBegin = 'A';
	$locObj17->callNumEnd = 'C';
	$locObj17->imageFile = 'floor3range2.gif';


//location "Floor 3 Shelves: Building Use Only" D - E99.C6 D
	$locObj18= new stdObject();
	$locObj18->libName = 'Milner';
	$locObj18->location = "Floor 3 Shelves: Building Use Only";
	$locObj18->callNumBegin = 'D';
	$locObj18->callNumEnd = 'E99.C6 D';
	$locObj18->imageFile = 'floor3range3.gif';


//location "Floor 3 Shelves: Building Use Only" E99.C6 E - F
	$locObj19= new stdObject();
	$locObj19->libName = 'Milner';
	$locObj19->location = "Floor 3 Shelves: Building Use Only";
	$locObj19->callNumBegin = 'E99.C6 E';
	$locObj19->callNumEnd = 'F';
	$locObj19->imageFile = 'floor3range4.gif';


//location "Floor 4 Federal Documents Shelves" DOC A - DOC Z
	$locObj20= new stdObject();
	$locObj20->libName = 'Milner';
	$locObj20->location = "Floor 4 Federal Documents Shelves";
	$locObj20->callNumBegin = 'DOC A';
	$locObj20->callNumEnd = 'DOC Z';
	$locObj20->imageFile = 'floor4range1.gif';


//location "Floor 4 Federal Documents Shelves: Building Use Only" DOC A - DOC Z
	$locObj21= new stdObject();
	$locObj21->libName = 'Milner';
	$locObj21->location = "Floor 4 Federal Documents Shelves: Building Use Only";
	$locObj21->callNumBegin = 'DOC A';
	$locObj21->callNumEnd = 'DOC Z';
	$locObj21->imageFile = 'floor4range1.gif';


//location "Floor 4 Shelves" G - HB139.A35
	$locObj22= new stdObject();
	$locObj22->libName = 'Milner';
	$locObj22->location = "Floor 4 Shelves";
	$locObj22->callNumBegin = 'G';
	$locObj22->callNumEnd = 'HB139.A35';
	$locObj22->imageFile = 'floor4range2.gif';


//location "Floor 4 Shelves" HB139.A38 - HD9720.5.C
	$locObj23= new stdObject();
	$locObj23->libName = 'Milner';
	$locObj23->location = "Floor 4 Shelves";
	$locObj23->callNumBegin = 'HB139.A38';
	$locObj23->callNumEnd = 'HD9720.5.C';
	$locObj23->imageFile = 'floor4range3.gif';


//location "Floor 4 Shelves" HD9720.5.D - HQ1370
	$locObj24= new stdObject();
	$locObj24->libName = 'Milner';
	$locObj24->location = "Floor 4 Shelves";
	$locObj24->callNumBegin = 'HD9720.5.D';
	$locObj24->callNumEnd = 'HQ1370';
	$locObj24->imageFile = 'floor4range4.gif';


//location "Floor 4 Shelves" HQ1371 - HV1421.S
	$locObj25= new stdObject();
	$locObj25->libName = 'Milner';
	$locObj25->location = "Floor 4 Shelves";
	$locObj25->callNumBegin = 'HQ1371';
	$locObj25->callNumEnd = 'HV1421.S';
	$locObj25->imageFile = 'floor4range5.gif';


//location "Floor 4 Shelves" HV1421.T - KZ
	$locObj26= new stdObject();
	$locObj26->libName = 'Milner';
	$locObj26->location = "Floor 4 Shelves";
	$locObj26->callNumBegin = 'HV1421.T';
	$locObj26->callNumEnd = 'KZ';
	$locObj26->imageFile = 'floor4range6.gif';


//location "Floor 4 Shelves: Building Use Only" G - HB139.A35
	$locObj27= new stdObject();
	$locObj27->libName = 'Milner';
	$locObj27->location = "Floor 4 Shelves: Building Use Only";
	$locObj27->callNumBegin = 'G';
	$locObj27->callNumEnd = 'HB139.A35';
	$locObj27->imageFile = 'floor4range2.gif';


//location "Floor 4 Shelves: Building Use Only" HB139.A38 - HD9720.5.C
	$locObj28= new stdObject();
	$locObj28->libName = 'Milner';
	$locObj28->location = "Floor 4 Shelves: Building Use Only";
	$locObj28->callNumBegin = 'HB139.A38';
	$locObj28->callNumEnd = 'HD9720.5.C';
	$locObj28->imageFile = 'floor4range3.gif';


//location "Floor 4 Shelves: Building Use Only" HD9720.5.D - HQ1370
	$locObj29= new stdObject();
	$locObj29->libName = 'Milner';
	$locObj29->location = "Floor 4 Shelves: Building Use Only";
	$locObj29->callNumBegin = 'HD9720.5.D';
	$locObj29->callNumEnd = 'HQ1370';
	$locObj29->imageFile = 'floor4range4.gif';


//location "Floor 4 Shelves: Building Use Only" HQ1371 - HV1421.S
	$locObj30= new stdObject();
	$locObj30->libName = 'Milner';
	$locObj30->location = "Floor 4 Shelves: Building Use Only";
	$locObj30->callNumBegin = 'HQ1371';
	$locObj30->callNumEnd = 'HV1421.S';
	$locObj30->imageFile = 'floor4range5.gif';


//location "Floor 4 Shelves: Building Use Only" HV1421.T - KZ
	$locObj31= new stdObject();
	$locObj31->libName = 'Milner';
	$locObj31->location = "Floor 4 Shelves: Building Use Only";
	$locObj31->callNumBegin = 'HV1421.T';
	$locObj31->callNumEnd = 'KZ';
	$locObj31->imageFile = 'floor4range6.gif';


//location "Floor 4 Maps Area" A - Z
	$locObj32= new stdObject();
	$locObj32->libName = 'Milner';
	$locObj32->location = "Floor 4 Maps Area";
	$locObj32->callNumBegin = 'A';
	$locObj32->callNumEnd = 'Z';
	$locObj32->imageFile = 'floor4range7.gif';


//location "Floor 4 Oversize Materials" G - KZ
	$locObj33= new stdObject();
	$locObj33->libName = 'Milner';
	$locObj33->location = "Floor 4 Oversize Materials";
	$locObj33->callNumBegin = 'G';
	$locObj33->callNumEnd = 'KZ';
	$locObj33->imageFile = 'floor4range8.gif';


//location "Floor 4 Oversize Materials: Building Use Only" G - KZ
	$locObj34= new stdObject();
	$locObj34->libName = 'Milner';
	$locObj34->location = "Floor 4 Oversize Materials: Building Use Only";
	$locObj34->callNumBegin = 'G';
	$locObj34->callNumEnd = 'KZ';
	$locObj34->imageFile = 'floor4range8.gif';


//location "Floor 5 Shelves" Q - QA76.73.P22 F
	$locObj35= new stdObject();
	$locObj35->libName = 'Milner';
	$locObj35->location = "Floor 5 Shelves";
	$locObj35->callNumBegin = 'Q';
	$locObj35->callNumEnd = 'QA76.73.P22 F';
	$locObj35->imageFile = 'floor5range1.gif';


//location "Floor 5 Shelves" QA76.73.P22 G - QL495.N3
	$locObj36= new stdObject();
	$locObj36->libName = 'Milner';
	$locObj36->location = "Floor 5 Shelves";
	$locObj36->callNumBegin = 'QA76.73.P22 G';
	$locObj36->callNumEnd = 'QL495.N3';
	$locObj36->imageFile = 'floor5range2.gif';


//location "Floor 5 Shelves" QL495.N4 - RT1.N86
	$locObj37= new stdObject();
	$locObj37->libName = 'Milner';
	$locObj37->location = "Floor 5 Shelves";
	$locObj37->callNumBegin = 'QL495.N4';
	$locObj37->callNumEnd = 'RT1.N86';
	$locObj37->imageFile = 'floor5range3.gif';


//location "Floor 5 Shelves" RT1.N87 - ZA
	$locObj38= new stdObject();
	$locObj38->libName = 'Milner';
	$locObj38->location = "Floor 5 Shelves";
	$locObj38->callNumBegin = 'RT1.N87';
	$locObj38->callNumEnd = 'ZA';
	$locObj38->imageFile = 'floor5range4.gif';


//location "Floor 5 Shelves: Building Use Only" Q - QA76.73.P22 F
	$locObj39= new stdObject();
	$locObj39->libName = 'Milner';
	$locObj39->location = "Floor 5 Shelves: Building Use Only";
	$locObj39->callNumBegin = 'Q';
	$locObj39->callNumEnd = 'QA76.73.P22 F';
	$locObj39->imageFile = 'floor5range1.gif';


//location "Floor 5 Shelves: Building Use Only" QA76.73.P22 G - QL495.N3
	$locObj40= new stdObject();
	$locObj40->libName = 'Milner';
	$locObj40->location = "Floor 5 Shelves: Building Use Only";
	$locObj40->callNumBegin = 'QA76.73.P22 G';
	$locObj40->callNumEnd = 'QL495.N3';
	$locObj40->imageFile = 'floor5range2.gif';


//location "Floor 5 Shelves: Building Use Only" QL495.N4 - RT1.N86
	$locObj41= new stdObject();
	$locObj41->libName = 'Milner';
	$locObj41->location = "Floor 5 Shelves: Building Use Only";
	$locObj41->callNumBegin = 'QL495.N4';
	$locObj41->callNumEnd = 'RT1.N86';
	$locObj41->imageFile = 'floor5range3.gif';


//location "Floor 5 Shelves: Building Use Only" RT1.N87 - ZA
	$locObj42= new stdObject();
	$locObj42->libName = 'Milner';
	$locObj42->location = "Floor 5 Shelves: Building Use Only";
	$locObj42->callNumBegin = 'RT1.N87';
	$locObj42->callNumEnd = 'ZA';
	$locObj42->imageFile = 'floor5range4.gif';


//location "Floor 5 Oversize Materials" Q - ZA
	$locObj43= new stdObject();
	$locObj43->libName = 'Milner';
	$locObj43->location = "Floor 5 Oversize Materials";
	$locObj43->callNumBegin = 'Q';
	$locObj43->callNumEnd = 'ZA';
	$locObj43->imageFile = 'floor5range5.gif';


//location "Floor 5 Oversize Materials: Building Use Only" Q - ZA
	$locObj44= new stdObject();
	$locObj44->libName = 'Milner';
	$locObj44->location = "Floor 5 Oversize Materials: Building Use Only";
	$locObj44->callNumBegin = 'Q';
	$locObj44->callNumEnd = 'ZA';
	$locObj44->imageFile = 'floor5range5.gif';


//location "Floor 6 Shelves Teaching Materials Center" TMC - TMC
	$locObj45= new stdObject();
	$locObj45->libName = 'Milner';
	$locObj45->location = "Floor 6 Shelves Teaching Materials Center";
	$locObj45->callNumBegin = 'TMC';
	$locObj45->callNumEnd = 'TMC';
	$locObj45->imageFile = 'floor6range1.gif';


//location "Floor 6 Shelves Teaching Materials Center: Building Use Only" TMC - TMC
	$locObj46= new stdObject();
	$locObj46->libName = 'Milner';
	$locObj46->location = "Floor 6 Shelves Teaching Materials Center: Building Use Only";
	$locObj46->callNumBegin = 'TMC';
	$locObj46->callNumEnd = 'TMC';
	$locObj46->imageFile = 'floor6range1.gif';


//location "Floor 6 Media" A - Z
	$locObj47= new stdObject();
	$locObj47->libName = 'Milner';
	$locObj47->location = "Floor 6 Media";
	$locObj47->callNumBegin = 'A';
	$locObj47->callNumEnd = 'Z';
	$locObj47->imageFile = 'floor6range2.gif';


//location "Floor 6 Shelves" L - M25.J
	$locObj48= new stdObject();
	$locObj48->libName = 'Milner';
	$locObj48->location = "Floor 6 Shelves";
	$locObj48->callNumBegin = 'L';
	$locObj48->callNumEnd = 'M25.J';
	$locObj48->imageFile = 'floor6range3.gif';


//location "Floor 6 Shelves" M25.K - NC258.A
	$locObj49= new stdObject();
	$locObj49->libName = 'Milner';
	$locObj49->location = "Floor 6 Shelves";
	$locObj49->callNumBegin = 'M25.K';
	$locObj49->callNumEnd = 'NC258.A';
	$locObj49->imageFile = 'floor6range4.gif';


//location "Floor 6 Shelves" NC258.B - PQ1812.K
	$locObj50= new stdObject();
	$locObj50->libName = 'Milner';
	$locObj50->location = "Floor 6 Shelves";
	$locObj50->callNumBegin = 'NC258.B';
	$locObj50->callNumEnd = 'PQ1812.K';
	$locObj50->imageFile = 'floor6range5.gif';


//location "Floor 6 Shelves" PQ1812.L - PR4166.H
	$locObj51= new stdObject();
	$locObj51->libName = 'Milner';
	$locObj51->location = "Floor 6 Shelves";
	$locObj51->callNumBegin = 'PQ1812.L';
	$locObj51->callNumEnd = 'PR4166.H';
	$locObj51->imageFile = 'floor6range6.gif';


//location "Floor 6 Shelves" PR4166.I - PS3501.R5
	$locObj52= new stdObject();
	$locObj52->libName = 'Milner';
	$locObj52->location = "Floor 6 Shelves";
	$locObj52->callNumBegin = 'PR4166.I';
	$locObj52->callNumEnd = 'PS3501.R5';
	$locObj52->imageFile = 'floor6range7.gif';


//location "Floor 6 Shelves" PS3501.R6 - PZ
	$locObj53= new stdObject();
	$locObj53->libName = 'Milner';
	$locObj53->location = "Floor 6 Shelves";
	$locObj53->callNumBegin = 'PS3501.R6';
	$locObj53->callNumEnd = 'PZ';
	$locObj53->imageFile = 'floor6range8.gif';


//location "Floor 6 Shelves: Building Use Only" L - M25.J
	$locObj54= new stdObject();
	$locObj54->libName = 'Milner';
	$locObj54->location = "Floor 6 Shelves: Building Use Only";
	$locObj54->callNumBegin = 'L';
	$locObj54->callNumEnd = 'M25.J';
	$locObj54->imageFile = 'floor6range3.gif';


//location "Floor 6 Shelves: Building Use Only" M25.K - NC258.A
	$locObj55= new stdObject();
	$locObj55->libName = 'Milner';
	$locObj55->location = "Floor 6 Shelves: Building Use Only";
	$locObj55->callNumBegin = 'M25.K';
	$locObj55->callNumEnd = 'NC258.A';
	$locObj55->imageFile = 'floor6range4.gif';


//location "Floor 6 Shelves: Building Use Only" NC258.B - PQ1812.K
	$locObj56= new stdObject();
	$locObj56->libName = 'Milner';
	$locObj56->location = "Floor 6 Shelves: Building Use Only";
	$locObj56->callNumBegin = 'NC258.B';
	$locObj56->callNumEnd = 'PQ1812.K';
	$locObj56->imageFile = 'floor6range5.gif';


//location "Floor 6 Shelves: Building Use Only" PQ1812.L - PR4166.H
	$locObj57= new stdObject();
	$locObj57->libName = 'Milner';
	$locObj57->location = "Floor 6 Shelves: Building Use Only";
	$locObj57->callNumBegin = 'PQ1812.L';
	$locObj57->callNumEnd = 'PR4166.H';
	$locObj57->imageFile = 'floor6range6.gif';


//location "Floor 6 Shelves: Building Use Only" PR4166.I - PS3501.R5
	$locObj58= new stdObject();
	$locObj58->libName = 'Milner';
	$locObj58->location = "Floor 6 Shelves: Building Use Only";
	$locObj58->callNumBegin = 'PR4166.I';
	$locObj58->callNumEnd = 'PS3501.R5';
	$locObj58->imageFile = 'floor6range7.gif';


//location "Floor 6 Shelves: Building Use Only" PS3501.R6 - PZ
	$locObj59= new stdObject();
	$locObj59->libName = 'Milner';
	$locObj59->location = "Floor 6 Shelves: Building Use Only";
	$locObj59->callNumBegin = 'PS3501.R6';
	$locObj59->callNumEnd = 'PZ';
	$locObj59->imageFile = 'floor6range8.gif';


//location "Floor 6 Miniature Score Shelves" M - M
	$locObj60= new stdObject();
	$locObj60->libName = 'Milner';
	$locObj60->location = "Floor 6 Miniature Score Shelves";
	$locObj60->callNumBegin = 'M';
	$locObj60->callNumEnd = 'M';
	$locObj60->imageFile = 'floor6range9.gif';


//location "Floor 6 Oversize Materials" M - M
	$locObj61= new stdObject();
	$locObj61->libName = 'Milner';
	$locObj61->location = "Floor 6 Oversize Materials";
	$locObj61->callNumBegin = 'M';
	$locObj61->callNumEnd = 'M';
	$locObj61->imageFile = 'floor6range10.gif';


//location "Floor 6 Oversize Materials" N - P
	$locObj62= new stdObject();
	$locObj62->libName = 'Milner';
	$locObj62->location = "Floor 6 Oversize Materials";
	$locObj62->callNumBegin = 'N';
	$locObj62->callNumEnd = 'P';
	$locObj62->imageFile = 'floor6range11.gif';


//location "Floor 6 Oversize Materials: Building Use Only" M - M
	$locObj63= new stdObject();
	$locObj63->libName = 'Milner';
	$locObj63->location = "Floor 6 Oversize Materials: Building Use Only";
	$locObj63->callNumBegin = 'M';
	$locObj63->callNumEnd = 'M';
	$locObj63->imageFile = 'floor6range10.gif';


//location "Floor 6 Oversize Materials: Building Use Only" N - P
	$locObj64= new stdObject();
	$locObj64->libName = 'Milner';
	$locObj64->location = "Floor 6 Oversize Materials: Building Use Only";
	$locObj64->callNumBegin = 'N';
	$locObj64->callNumEnd = 'P';
	$locObj64->imageFile = 'floor6range11.gif';


//location "Floor 6 Special Collections: Building Use Only" A - Z
	$locObj65= new stdObject();
	$locObj65->libName = 'Milner';
	$locObj65->location = "Floor 6 Special Collections: Building Use Only";
	$locObj65->callNumBegin = 'A';
	$locObj65->callNumEnd = 'Z';
	$locObj65->imageFile = 'floor6range12.gif';


//location "Floor 6 Special Collections: Children's and Textbooks" A - Z
	$locObj66= new stdObject();
	$locObj66->libName = 'Milner';
	$locObj66->location = "Floor 6 Special Collections: Children's and Textbooks";
	$locObj66->callNumBegin = 'A';
	$locObj66->callNumEnd = 'Z';
	$locObj66->imageFile = 'floor6range12.gif';


//location "Floor 6 Special Collections: Rare & Fine: Building Use Only" A - Z
	$locObj67= new stdObject();
	$locObj67->libName = 'Milner';
	$locObj67->location = "Floor 6 Special Collections: Rare & Fine: Building Use Only";
	$locObj67->callNumBegin = 'A';
	$locObj67->callNumEnd = 'Z';
	$locObj67->imageFile = 'floor6range12.gif';


//put all objects in an array 
	$locArray = array(
		0 => $locObj0,
		1 => $locObj1,
		2 => $locObj2,
		3 => $locObj3,
		4 => $locObj4,
		5 => $locObj5,
		6 => $locObj6,
		7 => $locObj7,
		8 => $locObj8,
		9 => $locObj9,
		10 => $locObj10,
		11 => $locObj11,
		12 => $locObj12,
		13 => $locObj13,
		14 => $locObj14,
		15 => $locObj15,
		16 => $locObj16,
		17 => $locObj17,
		18 => $locObj18,
		19 => $locObj19,
		20 => $locObj20,
		21 => $locObj21,
		22 => $locObj22,
		23 => $locObj23,
		24 => $locObj24,
		25 => $locObj25,
		26 => $locObj26,
		27 => $locObj27,
		28 => $locObj28,
		29 => $locObj29,
		30 => $locObj30,
		31 => $locObj31,
		32 => $locObj32,
		33 => $locObj33,
		34 => $locObj34,
		35 => $locObj35,
		36 => $locObj36,
		37 => $locObj37,
		38 => $locObj38,
		39 => $locObj39,
		40 => $locObj40,
		41 => $locObj41,
		42 => $locObj42,
		43 => $locObj43,
		44 => $locObj44,
		45 => $locObj45,
		46 => $locObj46,
		47 => $locObj47,
		48 => $locObj48,
		49 => $locObj49,
		50 => $locObj50,
		51 => $locObj51,
		52 => $locObj52,
		53 => $locObj53,
		54 => $locObj54,
		55 => $locObj55,
		56 => $locObj56,
		57 => $locObj57,
		58 => $locObj58,
		59 => $locObj59,
		60 => $locObj60,
		61 => $locObj61,
		62 => $locObj62,
		63 => $locObj63,
		64 => $locObj64,
		65 => $locObj65,
		66 => $locObj66,
		67 => $locObj67,
		);

//begin checking for locations
	//variable to indicate that a match has been found
	$foundFlag = 0;
	foreach ($locArray as $locValue => $cur){

		//iterate through each location object and if a match is found, display the map
		if (($cur->location === $loc)&& ($subCall >= $cur->callNumBegin) && ($subCall < $cur->callNumEnd)) {
			 print '<p>Call number ' . $subCall . ' is in location: ' . $cur->location . '.';
		  print '<img src="img/' . $cur->imageFile . '"/><br />';
		  $foundFlag = 1;
		}

	}

	//if no match is found, display error message
		if($foundFlag === 0) {
			print '<p>Could not find this item. Please ask a librarian for assistance.</p>';
		}

//end location check
	print "</div>";
	print "</body>";
	print "</html>";

?>