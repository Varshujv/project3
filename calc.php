 <?php 
    if(isset($_POST['SUBMIT'])){
        $N1 = $_POST['N1'];
        $N2 = $_POST['N2'];
        $calculate = $_POST['calculate'];
        switch ($calculate) {
            case 'add':
                $compute = $N1+$N2;
            break;
            case 'sub':
                $compute = $N1-$N2;
            break;
            case 'mul':
                $compute = $N1*$N2;
            break;
            case 'div':
                $compute = $N1/N2;
            break;          
        }
    }
    ?>
        <h2>CALCULATOR</h2>
        <form method="POST" action="index.php">           
            <input type="text" name="N1">
            <input type="text" name="N2">
            <select class="opt" name="operator">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="submit" name="submit">                                         
        </form>
        <?php if(isset($_POST['submit'])){ ?>
            <input type="text" value="<?php echo $compute; ?>">
        <?php }else{ ?>
            <input type="text" value="0">
        <?php } ?>            
    
