<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">

        <!-- Custom styles-->
        <link rel="stylesheet" href="styles/styles.css">

        <title>Starlight Clan Raiding</title>       
    </head>
    <body>
        <div class="container-fluid">
            <?php include('topbar.php') ?>
            <h1 class="center display-1">Raiding</h1>
            <div id="raids" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#raids" data-slide-to="0"></li>
                    <li data-target="#raids" data-slide-to="1"></li>
                    <li data-target="#raids" data-slide-to="2" class="active"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <h2 class="center display-4">A Realm Reborn</h2>
                        <?php
                            try {
                                $link = new \PDO("mysql:host=162.241.218.136;dbname=psduckie_starlight;charset=utf8mb4", "psduckie_strlt", "2d/sX;pVf:$*H?K&fxq4B<}U'mg}cU@m[Rr", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_PERSISTENT => false));
                
                                $handle = $link->prepare("SELECT expack, tier, raidName, picPath, bosses, downedBossesNormal, downedBossesSavage FROM raids WHERE expack = 2 ORDER BY tier ASC");
                
                                $handle->execute();
                
                                $result = $handle->fetchAll(\PDO::FETCH_OBJ);
                                
                                print("<div class=\"card-columns\">");

                                foreach($result as $row) {
                                    print("<div class=\"card bg-dark\"><img class=\"card-img-top\" src=\"");
                                    print($row->picPath);
                                    print("\"><div class=\"card-header\"><h4 class=\"card-title\">");
                                    print($row->raidName);
                                    print("</h4></div><div class=\"card-body\"><div class=\"progress\">");
                                    if ($row->downedBossesSavage >= $row->bosses) { // Raid is cleared on savage
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:100%\">Savage</div></div>");
                                    }
                                    elseif ($row->downedBossesNormal >= $row->bosses) { // Raid is cleared on normal but not savage
                                        $savagePercent = ($row->downedBossesSavage / $row->bosses) * 100;
                                        $normalPercent = 100;
                                        $percentDifference = $normalPercent - $savagePercent;
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:");
                                        print($savagePercent);
                                        print("%\">Savage</div><div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:");
                                        print($percentDifference);
                                        print("%\">Normal</div></div>");
                                    }
                                    else { // Raid is not cleared on either difficulty
                                        $savagePercent = ($row->downedBossesSavage / $row->bosses) * 100;
                                        $normalPercent = ($row->downedBossesNormal / $row->bosses) * 100;
                                        $percentDifference = $normalPercent - $savagePercent;
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:");
                                        print($savagePercent);
                                        print("%\">Savage</div><div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:");
                                        print($percentDifference);
                                        print("%\">Normal</div></div>");
                                    }
                                    print("</div></div>");
                                }
                            }
                            catch(\PDOException $ex) {
                                print($ex->getMessage());
                            }
                            ?>
                   </div></div>
                    <div class="carousel-item">
                        <h2 class="center display-4">Heavensward</h2>
                        <?php
                            try {
                                $link = new \PDO("mysql:host=162.241.218.136;dbname=psduckie_starlight;charset=utf8mb4", "psduckie_strlt", "2d/sX;pVf:$*H?K&fxq4B<}U'mg}cU@m[Rr", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_PERSISTENT => false));
                
                                $handle = $link->prepare("SELECT expack, tier, raidName, picPath, bosses, downedBossesNormal, downedBossesSavage FROM raids WHERE expack = 3 ORDER BY tier ASC");
                
                                $handle->execute();
                
                                $result = $handle->fetchAll(\PDO::FETCH_OBJ);
                                
                                print("<div class=\"card-columns\">");

                                foreach($result as $row) {
                                    print("<div class=\"card bg-dark\"><img class=\"card-img-top\" src=\"");
                                    print($row->picPath);
                                    print("\"><div class=\"card-header\"><h4 class=\"card-title\">");
                                    print($row->raidName);
                                    print("</h4></div><div class=\"card-body\"><div class=\"progress\">");
                                    if ($row->downedBossesSavage >= $row->bosses) { // Raid is cleared on savage
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:100%\">Savage</div></div>");
                                    }
                                    elseif ($row->downedBossesNormal >= $row->bosses) { // Raid is cleared on normal but not savage
                                        $savagePercent = ($row->downedBossesSavage / $row->bosses) * 100;
                                        $normalPercent = 100;
                                        $percentDifference = $normalPercent - $savagePercent;
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:");
                                        print($savagePercent);
                                        print("%\">Savage</div><div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:");
                                        print($percentDifference);
                                        print("%\">Normal</div></div>");
                                    }
                                    else { // Raid is not cleared on either difficulty
                                        $savagePercent = ($row->downedBossesSavage / $row->bosses) * 100;
                                        $normalPercent = ($row->downedBossesNormal / $row->bosses) * 100;
                                        $percentDifference = $normalPercent - $savagePercent;
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:");
                                        print($savagePercent);
                                        print("%\">Savage</div><div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:");
                                        print($percentDifference);
                                        print("%\">Normal</div></div>");
                                    }
                                    print("</div></div>");
                                }
                            }
                            catch(\PDOException $ex) {
                                print($ex->getMessage());
                            }
                            ?>
                    </div></div>
                    <div class="carousel-item active">
                        <h2 class="center display-4">Stormblood</h2>
                        <?php
                            try {
                                $link = new \PDO("mysql:host=162.241.218.136;dbname=psduckie_starlight;charset=utf8mb4", "psduckie_strlt", "2d/sX;pVf:$*H?K&fxq4B<}U'mg}cU@m[Rr", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_PERSISTENT => false));
                
                                $handle = $link->prepare("SELECT expack, tier, raidName, picPath, bosses, downedBossesNormal, downedBossesSavage FROM raids WHERE expack = 4 ORDER BY tier ASC");
                
                                $handle->execute();
                
                                $result = $handle->fetchAll(\PDO::FETCH_OBJ);
                                
                                print("<div class=\"card-columns\">");

                                foreach($result as $row) {
                                    print("<div class=\"card bg-dark\"><img class=\"card-img-top\" src=\"");
                                    print($row->picPath);
                                    print("\"><div class=\"card-header\"><h4 class=\"card-title\">");
                                    print($row->raidName);
                                    print("</h4></div><div class=\"card-body\"><div class=\"progress\">");
                                    if ($row->downedBossesSavage >= $row->bosses) { // Raid is cleared on savage
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:100%\">Savage</div></div>");
                                    }
                                    elseif ($row->downedBossesNormal >= $row->bosses) { // Raid is cleared on normal but not savage
                                        $savagePercent = ($row->downedBossesSavage / $row->bosses) * 100;
                                        $normalPercent = 100;
                                        $percentDifference = $normalPercent - $savagePercent;
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:");
                                        print($savagePercent);
                                        print("%\">Savage</div><div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:");
                                        print($percentDifference);
                                        print("%\">Normal</div></div>");
                                    }
                                    else { // Raid is not cleared on either difficulty
                                        $savagePercent = ($row->downedBossesSavage / $row->bosses) * 100;
                                        $normalPercent = ($row->downedBossesNormal / $row->bosses) * 100;
                                        $percentDifference = $normalPercent - $savagePercent;
                                        print("<div class=\"progress-bar progress-bar-striped progress-bar-animated bg-danger\" style=\"width:");
                                        print($savagePercent);
                                        print("%\">Savage</div><div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:");
                                        print($percentDifference);
                                        print("%\">Normal</div></div>");
                                    }
                                    print("</div></div>");
                                }
                            }
                            catch(\PDOException $ex) {
                                print($ex->getMessage());
                            }
                            ?>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#raids" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#raids" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </body>
</html>