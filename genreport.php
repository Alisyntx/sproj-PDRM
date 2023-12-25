<script src="jquery/genreport/genreport.js"></script>
<div class="genreportcontainer">
    <div class="genreportformcont">
            <div class="genreportformcont1Title">
                <h4>Generate Report /</h4>
                <button class="ms-1" id="genshowbtn"><h4> Show List</h4></button>
            </div>
         <div class="genreportflex">
            <form class="genreportForms" id="genreportForms">
                    <div class="genreportForms1">
                        <div class="coolinput">
                            <label for="input" class="text">Date:</label>
                            <input type="date" placeholder="Write here..." name="gendate" class="input">
                        </div>
                        <div class="coolinput">
                            <label for="input" class="text">Disaster Type:</label>
                            <input type="text"  placeholder="Write here..." name="distype" class="input" required>
                        </div>
                        <div class="coolinput">
                            <label for="input" class="text">Number OF Injuries:</label>
                            <input type="number" placeholder="Write here..." name="numinju" class="input">
                        </div>
                        <div class="coolinput">
                            <label for="input" class="text">Missing Person:</label>
                            <input type="number" placeholder="Write here..." name="missper" class="input">
                        </div>
                        <div class="coolinput">
                            <label for="input" class="text">Number of Death:</label>
                            <input type="number" placeholder="Write here..." name="numdeath" class="input">
                        </div>
                        <div class="coolinput">
                            <label for="input" class="text">Damage Structure:</label>
                            <input type="number" placeholder="Write here..." name="damstruc" class="input">
                        </div>
                        <div class="coolinput">
                            <label for="input" class="text">Displace Population:</label>
                            <input type="number" placeholder="Write here..." name="disppop" class="input">
                        </div>
                        <div class="coolinput">
                            <label for="input" class="text">Emergency Response Action:</label>
                            <input type="text" placeholder="Write here..." name="emerres" class="input">
                        </div>
                    </div>
                    <div class="genreportbutton">
                        <button type="submit">Generate</button>
                    </div>
            </form>
                <div class="gentablecont" id="gentablecont">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th> ID </th>
                                <th> Date </th> 
                                <th> Disaster Type </th>
                                <th> Injuries </th>
                                <th> Missing Person </th>
                                <th> Death </th>
                                <th> Damage Structure </th>
                                <th> Displace Residence </th>
                                <th> Response </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $conn = mysqli_connect("localhost","root","","disasterdb");
                            $query = $conn->query("SELECT * FROM genreport");	
                            while( $data = mysqli_fetch_array( $query ) ) {
			            ?>
                            <tr id="tr_<?php echo $data['gen_ID'] ?>">
                                <td> <?php echo $data['gen_ID'] ?> </td>
                                <td> <?php echo $data['gen_date'] ?> </td>
                                <td> <?php echo $data['gen_distyp'] ?> </td>
                                <td> <?php echo $data['gen_numinj'] ?> </td>
                                <td> <?php echo $data['gen_misper'] ?> </td>
                                <td> <?php echo $data['gen_numdet'] ?> </td>
                                <td> <?php echo $data['gen_damstr'] ?> </td>
                                <td> <?php echo $data['gen_dispop'] ?> </td>
                                <td> <?php echo $data['gen_res'] ?> </td>
                                <td> 
                                    <button type="button" class="btn btn-warning edit" id="<?php echo $data['gen_ID'] ?>" data-bs-toggle="modal"data-bs-target="#exampleModal5"> 
                                    <i class="bx bxs-message-square-edit"></i>
                                    </button> 
                                    <button class="btn btn-danger del" id="<?php echo $data['gen_ID'] ?>"> 
                                    <i class="bx bxs-message-square-minus"></i>
                                    </button> 
                                </td>
				            </tr>
                        <?php } ?> 
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
