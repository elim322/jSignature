<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="jSignature.min.js"></script>

    <title>PDF Form</title>
</head>
<body>


<div>

    <form action="makepdf.php" method="post" class="offset-md-3 col-md-6">

        <h1>ARC - NEW HOME WALK-THROUGH-CHECKLIST</h1>
        <p>Fill out the details below and the PDF will download</p>

        <div class="form-check">
            <div>
                <input type="checkbox" name="check_list[]" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Original</label>
            </div>
            <div>
                <input type="checkbox" name="check_list[]" class="form-check-input" id="exampleCheck2">
                <label class="form-check-label" for="exampleCheck2">Construction</label>
            </div>
            <div>
                <input type="checkbox" name="check_list[]" class="form-check-input" id="exampleCheck3">
                <label class="form-check-label" for="exampleCheck3">Data-Entry</label>
            </div>
        </div>

        <div class="row mb-2">

            <div class="col-md">
                <input type="text" name="inspection" placeholder="Date of Inspection" class="form-control" required>
                <input type="text" name="cco-name" placeholder="Customer Care Officer" class="form-control" required>
                <input type="text" name="inspector" placeholder="This suite was inspected by" class="form-control" required>
                <input type="checkbox" name="purchaser" id="purchaser" />
                <label class="form-check-label" for="purchaser">Purchaser</label>
                <input type="checkbox" name="agent" id="agent" />
                <label class="form-check-label" for="agent">Agent</label>
            </div>

            <div class="col-md">
                <input type="text" name="work-order" placeholder="Work Order No." class="form-control" required>
                <input type="text" name="arc" placeholder="ARC:" class="form-control" required>
                <input type="text" name="project-code" placeholder="Project Code" class="form-control" required>
                <input type="text" name="suite-type" placeholder="Suite Type" class="form-control" required>
            </div>
            <div class="row mb-2">

                <div class="col-md-6">
                    <input type="text" name="tower" placeholder="Tower:" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="text" name="strata" placeholder="Strata Lot #" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="text" name="suite" placeholder="Suite #" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="tel" name="phone" placeholder="Contact Number" class="form-control" required>
                    <input type="checkbox" name="purchaser" id="purchaser" />
                    <label class="form-check-label" for="purchaser">Purchaser</label>
                    <input type="checkbox" name="agent" id="agent" />
                    <label class="form-check-label" for="agent">Agent</label>
                </div>

            </div>
            <!-- Signature area -->
            <div>
                <h3>Signature</h3>
                <div id="signature1"></div>
                <br/>
                <input type='button' id='click1' value='click'>
                <textarea id='output1' name="signature1" class="sig-area"></textarea>
                <br/>
                <div>
                    <img src='' id='sign_prev1' style='display: none;' />
                </div>
            </div>
            <div>
                <h3>Initial</h3>
                <div id="signature2"></div>
                <br/>
                <input type='button' id='click2' value='click'>
                <textarea id='output2' name="signature2" class="sig-area"></textarea>
                <br/>
                <div>
                    <img src='' id='sign_prev2' style='display: none;' />
                </div>
                <div>

            <!-- Preview image -->
  

            <!-- Script -->
            <script>
            $(document).ready(function() {

            // Initialize jSignature
            var $sigdiv1 = $("#signature1").jSignature({'UndoButton':true});
            var $sigdiv2 = $("#signature2").jSignature({'UndoButton':true});
            $('#click1').click(function(){
            // Get response of type image
            var data1 = $sigdiv1.jSignature('getData', 'image');            
  
            // Storing in textarea
            $('#output1').val(data1);
           

            // Alter image source 
            $('#sign_prev1').attr('src',"data:"+data1);
            $('#sign_prev1').show();
            });
       
            $('#click2').click(function(){
            var data2 = $sigdiv2.jSignature('getData', 'image'); 
            $('#output2').val(data2);
            $('#sign_prev2').attr('src',"data:"+data2);
            $('#sign_prev2').show();
            })
        });
         
            </script>
            <button type="submit" class="btn btn-success btn-lg">Submit</button>

        </form>


    </div>
    
</body>
</html>