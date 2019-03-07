<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Plymouth Owners Club</title>

</head>


<body>
<div class="wrapper">
    <header class="header">
        <img class ="header-img" src="images/headerimage2.jpg" title="Plymouth Owners Club Founded 1957" alt="Plymouth Owners Club logo and a lineup of classic cars.">
    </header>

    <section class="content">
        <div class="columns">
            <main class="main">
                <h2>Become a member</h2>
                <h3>Join us today!</h3>
                <p>
                    Dues for one year membership are $35.00. (Canadian & overseas members must remit in U.S. funds).
                    Airmail delivery to overseas members is optional at $45.00 per year.
                </p>
                <p>
                    Membership in the Plymouth Club entitles you to a one year subscription to the "Plymouth Bulletin" magazine.
                    This twenty-two time Golden Quill Award winning, professionally-printed, color-cover magazine features stories,
                    articles, and historic photos on club-recognized vehicles and activities.
                    A special feature of the magazine is the classified advertising section where members can buy, sell,
                    or trade Plymouth related items free of charge. Our parts reproducers and suppliers guide in each issue
                    is a valuable guide to MoPar parts vendors.
                    A sample copy of the magazine may be obtained for $3. Plymouth Club members may also get a membership roster
                    listing names, addresses, and vehicles owned, to enable members with similar vehicles to contact one another.
                </p>

                <p>
                    You can still become a member by downloding the paper membership form <a href="images/application.pdf" target="_blank">here</a> and sending it in the mail with your fee enclosed.
                </p>
                <form id="register" name="register" method="" action="">
                    <!--REGISTARION FORM SENT TO THIS EMAIL join@plymouthowners.club AND USERNAME AND PASSWORD SAVED TO FILE
                    ALL REQUIRED FEILDS EXCEPT EMAIL-->
                    <fieldset>
                        <legend>
                            New Member Information
                        </legend>
                        <div id="meminfo">
                            <label for="date" id="date" title="today's date">Date</label>
                            <input id="date" type="date" >
                        </div>
                        <div id="meminfo">
                            <label for="fname" id="fname" title"enter your first name">First Name</label>
                            <input id="fname" type="text" size="25">
                            <label for="lname" id="lname" title"enter your last name">Last Name</label>
                            <input id="lname" type="text" size="25">
                        </div>
                        <div id="meminfo">
                            <label for="add" id="add" title="enter your street address">Address</label>
                            <input id="add" type="text" size="72">
                        </div>
                        <div id="meminfo">
                            <label for="city" id="city" title="enter your city">City</label>
                            <input id="city" type="text" size="25">
                            <label for="state" id="state" title="enter your state abbreviation">State</label>
                            <input id="state" type="state" size="2">
                            <label for="zip" id="zip" title="enter your mailing zip code">Zip</label>
                            <input id="zip" type="zip" size="5">
                        </div>
                        <div id="meminfo">
                            <label for="email" id="email" title="enter your email address">Email</label>
                            <input id="email" type="email" size="30" >
                            <label for="phone" id="phone" title="enter your phone number">Phone</label>
                            <input id="phone" type="tel">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Membership Type
                        </legend>
                        <div id="meminfo">
                            <label for="usmem" id="usmem" title="united states resident" >US Resident ($35.00)</label>
                            <input id="usmem" type="checkbox">
                            <label for="osmem" id="osmem" title="Overseas or canadian resident" >Canadian/Overseas Resident ($45.00)</label>
                            <input id="usmem" type="checkbox">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            List Vehicles Owned - optional
                        </legend>
                        <div id="meminfo">
                            <input id="year" type="number" size="4" placeholder="Year" min="1900" max="2050" title="year of vehicle">
                            <input id="model" type="text" size="15" placeholder="Model" title="vehicle model">
                            <input id="body" type="text" size="15" placeholder="Body Style" title="vehicle body style">
                            <input id="cyl" type="number" size="2" placeholder="Cylinders" min="1" max="8" title="vehicle number of cylinders">
                            <input id="engine" type="text" size="10" placeholder="Engine Number" title="enter engine number">
                            <input id="serial" type="text" size="15" placeholder="Serial Number" title="enter serial number">
                            <input id="bodynum" type="text" size="10" placeholder="Body Number" title="enter body number">
                        </div>
                        <div id="meminfo">
                            <input id="year" type="number" size="4" placeholder="Year" min="1900" max="2050" title="year of vehicle">
                            <input id="model" type="text" size="15" placeholder="Model" title="vehicle model">
                            <input id="body" type="text" size="15" placeholder="Body Style" title="vehicle body style">
                            <input id="cyl" type="number" size="2" placeholder="Cylinders" min="1" max="8" title="vehicle number of cylinders">
                            <input id="engine" type="text" size="10" placeholder="Engine Number" title="enter engine number">
                            <input id="serial" type="text" size="15" placeholder="Serial Number" title="enter serial number">
                            <input id="bodynum" type="text" size="10" placeholder="Body Number" title="enter body number">
                        </div>
                        <div id="meminfo">
                            <input id="year" type="number" size="4" placeholder="Year" min="1900" max="2050" title="year of vehicle">
                            <input id="model" type="text" size="15" placeholder="Model" title="vehicle model">
                            <input id="body" type="text" size="15" placeholder="Body Style" title="vehicle body style">
                            <input id="cyl" type="number" size="2" placeholder="Cylinders" min="1" max="8" title="vehicle number of cylinders">
                            <input id="engine" type="text" size="10" placeholder="Engine Number" title="enter engine number">
                            <input id="serial" type="text" size="15" placeholder="Serial Number" title="enter serial number">
                            <input id="bodynum" type="text" size="10" placeholder="Body Number" title="enter body number">
                        </div>
                        <div id="meminfo">
                            <input id="year" type="number" size="4" placeholder="Year" min="1900" max="2050" title="year of vehicle">
                            <input id="model" type="text" size="15" placeholder="Model" title="vehicle model">
                            <input id="body" type="text" size="15" placeholder="Body Style" title="vehicle body style">
                            <input id="cyl" type="number" size="2" placeholder="Cylinders" min="1" max="8" title="vehicle number of cylinders">
                            <input id="engine" type="text" size="10" placeholder="Engine Number" title="enter engine number">
                            <input id="serial" type="text" size="15" placeholder="Serial Number" title="enter serial number">
                            <input id="bodynum" type="text" size="10" placeholder="Body Number" title="enter body number">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Choose a Username and Password
                        </legend>
                        <input type="username" name="username" placeholder="username" >
                        <input type="password" name="password" placeholder="password" >
                    </fieldset>

                    <fieldset>
                        <legend>
                            Payment
                        </legend>
                        <div id="meminfo">
                            Paypal Payment
                        </div>
                    </fieldset>
                    <button typy="submit" form="register" value="submit">Become a Member!</button>
                </form>
            </main>
            <aside class="sidebar-left">

                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="membercars.html">Members Cars</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="howto.html">How to Become a Member</a></li>
                        <li><a href="discuss.html">Discussion Boards</a></li>
                        <li><a href="https://www.facebook.com/groups/POCNational/" target="_blank">Find Us on Facebook!</a></li>
                    </ul>
                </nav>
            </aside>

            <aside class="sidebar-right">

                <h3><a href="ethal.html" target="_blank">The Ethel Miller Story</a></h3>

                <img src="images/miller.jpg">

                <h3><a href="richardson.html" target="_blank">The Richardson Pan-American Expedition</a></h3>

                <img src="images/panam.jpg">


                <h3><a href="irma.html" target="_blank">Irma Darre-Brandt</a></h3>

                <img src="images/Irma.jpg">


            </aside>
        </div>
    </section>

    <footer class="footer">
        <p>
            <a href="https://www.facebook.com/groups/POCNational/">Find Us on Facebook |</a>
            <a href="mailto:join@plymouthowners.club"> Send us an email</a>
        </p>
        <p>
            Copyright &copy; 2019, Plymouth Owners Club INC | Designed and developed by Leslie A Borst.
        </p>
    </footer>
</div>
</body>
</html>