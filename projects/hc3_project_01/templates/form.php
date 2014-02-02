                    <h1>LOGIN</h1>
                    <form action="thanks.php">
                        <input type="email" class="textInput" placeholder="Email">
                        <input type="password" class="textInput" placeholder="Password">
                        <input class="rem" type="checkbox" name="remember" value="rem">
                        <label for="rem" class="chkbText">Remember Login</label>
                        <input type="submit" value="LOGIN" class="btnInput">
                    </form>
                    <br />
                    <h1>INQUIRE</h1>
                    <form action="thanks.php">
                        <input type="name" class="textInput" placeholder="Name">
                        <input type="email" class="textInput" placeholder="Email">
                        <select>
                            <option value="g">Select Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                        <textarea id="inquireText" cols="32" placeholder="Your inquiry here..."></textarea>
						<p class="tac">Do you agree to our <i>Terms and Conditions?</i></p>
						<input type="radio" id="toggle-on" name="toggle">
						<label for="toggle-on" class="radText">Yes</label>
						<input type="radio" id="toggle-off" name="toggle" checked>
						<label for="toggle-off" class="radText">No</label>
                        <input type="submit" value="ENTER" class="btnInput">
                    </form>