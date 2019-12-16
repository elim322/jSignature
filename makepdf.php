<?php

require_once __DIR__ . '/vendor/autoload.php';

//collect form data

$inspection = $_POST['inspection'];
$ccOfficer = $_POST['cco-name'];
$inspector = $_POST['inspector'];
$tower = $_POST['tower'];
$strata = $_POST['strata'];
$suite = $_POST['suite'];
$phone = $_POST['phone'];
$signature = $_POST['signature1'];
$initial = $_POST['signature2'];
$workOrder = $_POST['work-order'];
$arc = $_POST['arc'];
$projectCode = $_POST['project-code'];
$suiteType = $_POST['suite-type'];


//remove base:64 string from data URI
$signature = str_replace('image/png;base64,', '', $signature);
ob_start()
?>

<h1 style="font-weight: 200; font-size: 2rem;">ARC - NEW HOME WALK-THROUGH CHECKLIST</h1>
<table width="100%">
   <tr>
      <td>

         <input type="checkbox" name="original"> Original
        
          <input type="checkbox" name="construction"> Construction <input type="checkbox" name="data-entry"> Data Entry </td>
      <td><strong>Work Order No. </strong> <?php echo $workOrder ?> &nbsp;&nbsp; <strong>ARC - </strong> <?php echo $arc ?> </td>
   </tr>
   <tr>
      <td><strong><i>Date of Inspection:</i></strong> <?php echo $inspection ?></td>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Project Code -</strong> <?php echo $projectCode ?> &nbsp;&nbsp; <strong>Suite Type - </strong> <?php echo $suiteType ?> &nbsp;&nbsp;</td>
   </tr>
   <tr>
      <td><strong>Customer Care Officer:</strong> <?php echo $ccOfficer ?></td>
      <td><strong>Tower:</strong> <?php echo $tower?> &nbsp;&nbsp;<strong>Strata Lot -</strong> <?php echo $strata?> &nbsp;&nbsp;<strong>Suite -</strong> <?php echo $suite ?> &nbsp;&nbsp;</td>
   </tr>
   <tr>
      <td><strong>This Suite was inspected by:</strong> <?php echo $inspector ?></td>
      <td><strong>Contact Number:</strong> <?php echo $phone ?></td>
   </tr>
   <tr>
      <td><input type="checkbox" name="purchaser1">Purchaser &nbsp;&nbsp;&#47;&nbsp;&nbsp; <input type="checkbox" name="agent1">Agent</td>
      <td><input type="checkbox" name="purchaser1">Purchaser &nbsp;&nbsp;&#47;&nbsp;&nbsp; <input type="checkbox" name="agent1">Agent</td>
   <tr>
   </tbody>
</table>

    <htmlpagefooter name="MyFooter1">
        <div>
            <ol type="1">
                <li>The dining room ceiling light has been outfitted with a basic bulb to confirm power has been properly wired/supplied. If you wish to install a decorative light fixture, please use a licensed electrician as to not void the 2 year electrical Warranty.</li>
                <li>Paper copies of all appliance manuals have been left in the Kitchen drawer. (PDF copies are available on the Developers Web Site)</li>
                <li>The kitchen sink rack, hanging sink rack, and the drain stopper have been left in the the Kitchen sink.</li>
            </ol>
        </div>
    </htmlpagefooter>'

<pagebreak/>
<div>
    <div>
        <h1>New Home Walk-Through Instructions</h1>
    </div>
    <div>
        <p>Welcome to your new home! Please carefully read the instructions listed below before you start youre suite inspection.</p>
    </div>
    <div>
        <ol>
            <li>The Developer’s representative will conduct an introductory orientation of your suite with you and explain the important operational features.</li>
            <li>After the orientation, you will walk through your suite with the Developer’s Representative and record Defects+ and incomplete items, if any, on the checklist at the flipside.
            </li>
            <li>You are encouraged to focus on Patent (plainly visible) Defects at this walk-through. Latent Defects are covered under your home warranty insurance program in accordance with the Homeowner Protection Act (British Columbia)++.</li>
            <li>It is recommended that you complete the Walkthrough Inspection of your new home by starting at the entry door, following a clockwise order. This will help ensure that no room or area is unintentionally missed.</li>
            <li>Upon the completion of your Walkthrough Inspection Appointment please sign at the spaces provided at the bottom of the form.</li>
        </ol>
        <div>
            <p>NOTE: Items identified on the checklist which are not consistent with the standards stipulated in the new home walk-through instructions, as determined by Construction Representatives, will be deleted and transferred to a Customer Services Request Form for further review.</p>
        </div>
        <div style="display: flex; flex-direction: row;">
            <p>I have read and understand these instructions</p><img src="<?php echo 'data:image/png;base64,'.$signature?>"/>
        </div>
        <div>
            <p>+ Defects are assessed against the Residential Construction Performance Guide prepared by the Homeowner Protection Office. A copy of this publication is available at their website at www.hpo.bc.ca and also from your third party home warranty insurance company Travelers Guarantee Company of Canada at their website www.travelerscanada.ca. Some sample guidelines are:</p>
            <ul>
                <li><span>Gypsum Wallboard:</span> Slight imperfections are not unusual on gypsum board surfaces. Gypsum board defects and corner bead or taping separation creating cracks greater than 2mm in width or 300mm in length are considered defects.</li>
                <li><span>Ceiling:</span> Bulges or indentations exceeding 6mm over the support space are considered defects.</li>
                <li><span>Painting:</span> Paints and other protective coatings and their application shall conform to acceptable industry standards. Paint blisters or peeling lifting are defects.</li>
                <li><span>Tile work:</span> Cracked tiles, loose tiles or cracks in grouting of ceramic tile joints are Defects. However, hairline cracks in grouting of ceramic tile joints and slight colour variations of grouting are acceptable.</li>
                <li><span>Wood flooring:</span> Cracks in excess of 2mm between finished floorboards in width are defects.</li>
                <li><span>Carpeting:</span> Carpeting should not become loose, buckle or separate from its point of attachment. Carpet seams may be visible; however, no gaps are permissible. Where dissimilar materials abut, a gap not to exceed 3mm is permissible.</li>
            </ul>
            <div>
                <p>All finishing and design details will be completed in accordance with the Offer to Purchase and Agreement of Sale entered into between the Vendor and the Purchaser. Any natural materials used in the finishing of the suite, including without limitation, stone, granite, marble and wood, may have conspicuous variations in colour, grain, vein, texture, pattern, size, permeability and stain resistance and any such variations are merely characteristics of the respective material and will not be considered as Defects. Defects on paint, window and glass surfaces will be considered if identified at a distance not less than 4 feet from the subject surface.</p>
            </div>
            <div>
                <p>++ The coverage with respect to home warranty insurance in accordance with the requirements of the <span>Homeowner Protection
Act (British Columbia)</span> are as follows:</p>
                <ol type="i">
                    <li>Defects in materials and labour for a period of two years after the date on which the warranty begins, as follows:
                        <ol type="1">
                            <li>in the first 12 months, for other than the Common Property, common facilities and other assets of the Strata Corporation:
                                <ol type="A">
                                    <li>coverage for any defect in materials and labour; and</li>
                                    <li>coverage for a violation of the Building Code*,</li>
                                </ol>
                            </li>
                            <li>in the first 15 months, for the Common Property, common facilities and other assets of the Strata Corporation:
                                <ol type="A">
                                    <li>coverage for any defect in materials and labour; and</li>
                                    <li>coverage for a violation of the Building Code*,</li>
                                </ol>
                            </li>
                            <li>in the first 24 months:
                                <ol type="A">
                                    <li>coverage for any defect in materials and labour supplied for the electrical, plumbing, heating, ventilation and air conditioning delivery and distribution systems;</li>
                                    <li>coverage for any defect in materials and labour supplied for the exterior cladding, caulking, windows and doors that may lead to detachment or material damage to the Strata Lot;</li>
                                    <li>coverage for any defect in materials and labour which renders the Strata Lot unfit to live in; and</li>
                                    <li>coverage for a violation of the building code*;</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li>defects in the building envelope, including defects which permits unintended water penetration such that it causes or is likely to cause material damage, for a period of five years after the date on which the warranty begins; and</li>
                    <li>structural defects for a period of ten years after the date on which the warranty begins; as follows:
                        <ol type="1">
                            <li>any defect in materials and labour that results in the failure of a load bearing part of the Strata Lot; and</li>
                            <li>any defect which causes structural damage that materially affects the use of the Strata Lot for residential occupancy.</li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
        <hr />
        <div>
            <p>*For further definitions or information, please check out the <span><strong>Residential Construction Performance Guide<strong></span> on the
<span><strong>Homeowner Protection Office (HPO)</strong></span> website at www.hpo.bc.ca
It can be found under the “Reports & Publications/Homeowners & Homebuyers” tab on the left side of the screen.</p>
        </div>
    </div>

</div>
<?php
$data = ob_get_clean();
//Create new PDf instance
$mpdf = new \Mpdf\Mpdf(['format' => 'legal']);

//add data
// $data .= '<strong>Inspection Date</strong> ' . $inspection . '<br/>';
// $data .= '<strong>Customer Care Officer</strong> ' . $ccOfficer . '<br/>';
// $data .= '<strong>This Suite was inspected by</strong> ' . $inspector . '<br/>';
// $data .= '<strong>Tower #</strong> ' . $tower . '<br/>';
// $data .= '<strong>Strata Lot #</strong> ' . $strata . '<br/>';
// $data .= '<strong>Suite #</strong> ' . $suite . '<br/>';
// $data .= '<strong>Email</strong> ' . $phone . '<br/>';
// $data .= '<strong>Phone</strong> ' . $email . '<br/>';
// $data .= "<img src='data:image/png;base64,$signature'" . "/>";

// set HTML footer 
$mpdf->SetHTMLFooterByName('MyFooter1');

//Write PDF
$mpdf->WriteHTML($data);

//output to browser

$mpdf->Output('myfile.pdf', 'I');

?>