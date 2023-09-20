<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FootHub</title>
    <link rel="icon" type="image/x-icon" href="images/Flogo.jpg">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
       <div>
        <div class="logo">
            <a href="index.php">
              <img src="images/Flogo.jpg" alt="" width="auto" height="70" class="hlogo">
            </a>
            <a class="font" href="https://www.facebook.com/profile.php?id=100005994616204&mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="font" href="https://www.instagram.com/p/CYElxlbsFR1r7SVlEDw7unJHpyhb7wl5tYRKDg0/?igshid=Yzg5MTU1MDY=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                  <a class="font" href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          </div>
          <form action="player2.php" method="post">
          <div class="search">
              <input type="text" name="NAME">
              <button class="sbtn" type="submit">SEARCH</button>
          </div>
          </form>
          
       </div>
      </nav>

      <div class="navi">
        <a href="news.php">NEWS</a>
        <a href="transfer&rumours.php">TRANSFERS & RUMOURS</a>
        <a href="topplayer.php">MARKET VALUES</a>
        <a href="pointTable.php">COMPETITIONS</a>
        <a href="https://www.goal.com/en/live-scores" target="_blank">LIVE</a>
        <form action="signup.php" method="post">
          
        <button class="logIn" type="submit">FeedBack</button>
        </form>

    </div>

        <div class="mid-section">
          <h1>Spotlight</h1>
         
<div class="slideshow-container">

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slider1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/slider2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/slider3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
        
                <div class="news">
                <div>
        <div class="col">
          <div class="card1">
            <img src="images/card1.jpg" class="card-img-top" alt="...">
            <div class="">
              
              <p class="">Unbelievable win by Aston Villa at Etihad</p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card1">
              <img src="images/card2.png" class="card-img-top" alt="...">
              <div class="">
                
                <p class="">The most expensive signing the history of european football.</p>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card1">
            <img src="images/card3jpg.jpg" class="card-img-top" alt="...">
            <div class="">
              
              <p class="">Unbelievable win by Aston Villa at Etihad</p>
            </div>
          </div>
        </div>
      </div>
</div>
</div>

       
<div class="transfer">
    <h1>Transfer</h1>
      <div class="transfer-table">
        <div class="Ltransfer">
          <h4>Last Transfer</h4>
        <table>
          <thead>
            <tr>
              <th colspan="2" class="player">Player/Position</th>
              <th class="club">Club</th>
              <th class="TFee">Transfer Fee</th>
            </tr>
          </thead>

            <tbody>

            <?php
                include 'connection.php';
                $selectquery="SELECT * FROM mvap where id<6";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){
                  
                  ?>
                  <tr>
                  <td class="player"><img class="TImg" src=<?php echo "images/".$res["Playerpicsrc"] ?>>
                  
                  </td>
                  <td>
                    <a href="player.php?id=<?php echo $res["Id"] ?>" style="text-decoration: none;"><p style="font-weight: bold;"><?php  echo $res["Name"] ?></p></a>
                  <p class="PlrPos"><?php echo $res["Position"] ?></p>
                  </td>
                  <td>
                    <img class="clubImg" src=<?php echo "images/".$res["Clubpicsrc"] ?> >
                  </td>
                  <td style="font-weight:bold;"><?php echo $res["Transferfees"] ?></td>
                </tr>
              <?php
               }
              ?>

             

              
            </tbody>

        </table>
        <a href="lastTransfer.php" style="float:right;">see more</a>
        </div>
        <div class="Ltransfer">
          <h4>Top Summer Transfers</h4>
        <table>
          <thead>
            <tr>
              <th colspan="2" class="player">Player/Position</th>
              <th class="club">Club</th>
              <th class="TFee">Transfer Fee</th>
            </tr>
          </thead>

            <tbody>
            <?php
                include 'connection.php';
                $selectquery="SELECT * FROM `tp` WHERE Transferfees>80";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){

                  ?>
                  <tr>
                  <td class="player"><img class="TImg" src=<?php echo "images/".$res["Playerpicsrc"] ?>>
                  
                  </td>
                  <td>
                    <a href="player.php?id=<?php echo $res["Id"] ?>" style="text-decoration: none;"><p style="font-weight: bold;"><?php echo $res["Name"] ?></p></a>
                  <p class="PlrPos"><?php echo $res["Position"] ?></p>
                  </td>
                  <td>
                    <img class="clubImg" src=<?php echo "images/".$res["Clubpicsrc"] ?> >
                  </td>
                  <td style="font-weight:bold;"><?php echo $res["Transferfees"] ?></td>
                </tr>
              <?php
                }
              ?>
            </tbody>

        </table>
        <a href="topSummer.php" style="float:right;">see more</a>
        </div>
        <div class="Ltransfer">
          <h4>Top Player</h4>
        <table>
          <thead>
            <tr>
              <th colspan="2" class="player">Player/Position</th>
              <th class="club">Club</th>
              <th class="TFee">Market Value</th>
            </tr>
          </thead>

            <tbody>
            <?php
                include 'connection.php';
                $selectquery="SELECT * FROM tp where id<6";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){

                  ?>
                  <tr>
                  <td class="player"><img class="TImg" src=<?php echo "images/".$res["Playerpicsrc"] ?> >
                  
                  </td>
                  <td>
                    <a href="player.php?id=<?php echo $res["Id"] ?>" style="text-decoration: none;"><p style="font-weight: bold;"><?php echo $res["Name"] ?></p></a>
                  <p class="PlrPos"><?php echo $res["Position"] ?></p>
                  </td>
                  <td>
                    <img class="clubImg" src=<?php echo "images/".$res["Clubpicsrc"] ?> >
                  </td>
                  <td style="font-weight:bold;"><?php echo $res["Transferfees"] ?></td>
                </tr>
              <?php
                }
              ?>
            </tbody>
                  
        </table>
        <a href="topplayer.php" style="float:right;">see more</a>
        </div>
      </div>
      
  </div>


  <div class="deals">
    <div class="deal-section">
      <div class="dealImg">
        <img  src="images/card4.jpg" alt="">
      </div>
      <div class="dealImg">
        <img  src="images/card5.png" alt="">
      </div>
      <div class="dealImg">
        <img  src="images/card6.jpg" alt="">
      </div>
      <div class="dealImg">
        <img  src="images/card7.png" alt="">
      </div>
    </div>
  </div>      



       
  <div class="matches">
    <h1>European Club Result</h1>
    <div class="inOneRow">
            <div class="match">
                <table>
                  <thead>
                    <tr>
                      <th class="date">Date</th>
                      <th class="HTeam">Home Team</th>
                      <th></th>
                      <th class="GTeam">Guest Team</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>10 november 2022</td>
                      <td class="home">Everton</td>
                      <td class="score"  style="color: white;">0-0</td>
                      <td>Aston Villa</td>
                    </tr>
      
                    <tr>
                      <td>11 november 2022</td>
                      <td class="home">Man UTD</td>
                      <td class="score"  style="color: white;">2-0</td>
                      <td>Chelsea</td>
                    </tr>
      
                    <tr>
                      <td>12 november 2022</td>
                      <td class="home">Man City</td>
                      <td class="score"  style="color: white;">3-0</td>
                      <td>Liverpool</td>
                    </tr>
      
                    <tr>
                      <td>11 november 2022</td>
                      <td class="home">Arsenal</td>
                      <td class="score"  style="color: white;">4-2</td>
                      <td>Leicter City</td>
                    </tr>
      
                    <tr>
                      <td>12 november 2022</td>
                      <td class="home">Villadolid</td>
                      <td class="score"  style="color: white;">3-0</td>
                      <td>Malaga FC</td>
                    </tr>
                  </tbody>
                </table>
                
            </div>
            <div class="match2">
              <table>
                <thead>
                  <tr class="PTable">
                    <th class="Tside rank">#</th>
                    <th class="TClub">Club</th>
                    <th class="tableInfo">Matches</th>
                    <th class="tableInfo">GD</th>
                    <th class="tableInfo">PTS</th>
                  </tr>
                </thead>
                <tbody>
          <?php
                include 'connection.php';
                $selectquery="SELECT * FROM point_table where Rank<6";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){

                  ?>
            <tr>
              <td><?php echo $res["Rank"] ?></td>
              <td><?php echo $res["Club_Name"] ?></td>
              <td  class="Tside"><?php echo $res["Match_played"] ?></td>
              <td  class="Tside"><?php echo $res["GD"] ?></td>
              <td  class="Tside"><?php echo $res["points"] ?></td>
            </tr>
           
            <?php
                }
            ?>
          </tbody>
              </table>
              <a href="pointTable.php" style="float:right;">see more</a>
            </div>
          </div>
  </div>
        <div class="deals">
          <div class="deal-section">
            <div class="dealImg">
              <img  src="images/card4.jpg" alt="">
            </div>
            <div class="dealImg">
              <img  src="images/card5.png" alt="">
            </div>
            <div class="dealImg">
              <img  src="images/card6.jpg" alt="">
            </div>
            <div class="dealImg">
              <img  src="images/card7.png" alt="">
            </div>
          </div>
        </div> 
        
        
        <div class="matches">
          <h1>LA LIGA</h1>
          <div class="inOneRow">
            <div class="match">
                <table>
                  <thead>
                    <tr>
                      <th class="date">Date</th>
                      <th class="HTeam">Home Team</th>
                      <th></th>
                      <th class="GTeam">Guest Team</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>10 november 2022</td>
                      <td class="home">Barcelona</td>
                      <td class="score"  style="color: white;">0-0</td>
                      <td>Rayo vollacano</td>
                    </tr>
      
                    <tr>
                      <td>11 november 2022</td>
                      <td class="home">Real Madrid</td>
                      <td class="score"  style="color: white;">2-0</td>
                      <td>Cadiz</td>
                    </tr>
      
                    <tr>
                      <td>12 november 2022</td>
                      <td class="home">Sevilla</td>
                      <td class="score"  style="color: white;">3-0</td>
                      <td>Atletico Madrid</td>
                    </tr>
      
                    <tr>
                      <td>11 november 2022</td>
                      <td class="home">Villareal</td>
                      <td class="score"  style="color: white;">4-2</td>
                      <td>Betis</td>
                    </tr>
      
                    <tr>
                      <td>12 november 2022</td>
                      <td class="home">Villadolid</td>
                      <td class="score"  style="color: white;">3-0</td>
                      <td>Malaga FC</td>
                    </tr>
                  </tbody>
                </table>
                
            </div>
            <div class="match2">
              <table>
                <thead>
                  <tr class="PTable">
                    <th class="Tside rank">#</th>
                    <th class="TClub">Club</th>
                    <th class="tableInfo">Matches</th>
                    <th class="tableInfo">GD</th>
                    <th class="tableInfo">PTS</th>
                  </tr>
                </thead>
                <tbody>
          <?php
                include 'connection.php';
                $selectquery="SELECT * FROM point_table where Rank<6";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){

                  ?>
            <tr>
              <td><?php echo $res["Rank"] ?></td>
              <td><?php echo $res["Club_Name"] ?></td>
              <td  class="Tside"><?php echo $res["Match_played"] ?></td>
              <td  class="Tside"><?php echo $res["GD"] ?></td>
              <td  class="Tside"><?php echo $res["points"] ?></td>
            </tr>
           
            <?php
                }
            ?>
          </tbody>
              </table>
              <a href="pointTable.php" style="float:right;">see more</a>
            </div>
          </div>
        </div>

        <div class="footer">
          <div class="oneRow">
            <div style="color: white;" class="common fb"><i class="fa-brands fa-facebook-f"><a href="https://www.facebook.com/profile.php?id=100005994616204&mibextid=ZbWKwL" target="_blank"></i>Facebook</a></div>
            <div class="common ig" ><i  class="fa-brands fa-instagram"></i><a href="https://www.instagram.com/p/CYElxlbsFR1r7SVlEDw7unJHpyhb7wl5tYRKDg0/?igshid=Yzg5MTU1MDY=" target="_blank">Instagram</a></div>
            <div class="common twi"><i class="fa-brands fa-twitter"><a href="https://twitter.com" target="_blank"></i>Twitter</a></div>
            <div class="common yt"><i class="fa-brands fa-youtube"></i>YouTube</div>
            <div class="common com"><i class="fa-solid fa-comments"></i>Community</div>
            <div class="common rss"><i class="fa-solid fa-square-rss"></i>RSS</div>
          </div>
          <div class="oneRow">
            <div class="alls">200 Like</div>
            <div class="alls">250 Followers</div>
            <div class="alls">500 Followers</div>
            <div class="alls">1000 Subscription</div>
            <div class="alls">650 Users</div>
            <div class="alls">5000 Subscription</div>
          </div>
        </div>
        


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>