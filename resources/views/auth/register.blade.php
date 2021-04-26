
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');* {
      margin: 0;
      box-sizing: border-box;
      font-family: 'Noto Sans', sans-serif;
      }
    :root {
      --colour-one: #FFFFFF;
      --colour-two: #fee4d4;
      --colour-three: #fdb493;
      --colour-four: #fb966f;
      --colour-five: #f45f34;
      --colour-six: #302825;
      --colour-seven: #000000;
      --colour-eight: #000000;
    }
    
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url("https://www.pnp.ac.id/wp-content/uploads/2018/07/14.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 100%;
    }
    .login_form {
      position: relative;
      border-bottom: 3px solid var(--colour-four);
      border-right: 3px solid var(--colour-four);
      background: var(--colour-three);
      height: 400px;
      width: 700px;
      box-shadow: 10px 10px 6px 2px rgb(242,102,34);
      overflow: hidden;
    }
    .details {
      position: relative;
      background: var(--colour-two);
      height: 400px;
      width: 350px;
    }
    .welcome {
      position: absolute;
      color: var(--colour-six);
      left: 40%;
      top: 10%;
      font-size: 30pt;
    }
    .wrap:nth-child(1) {
      position: absolute;
      top: 35%;
      left: 50%;
      margin: 12px;
    }
    .wrap:nth-child(2) {
      position: absolute;
      top: 25%;
      left: 30%;
      font-size: 15px;
      margin: 12px;
    }
    .wrap:nth-child(3) {
      position: absolute;
      top: 45%;
      left: 30%;
      font-size: 15px;
      margin: 12px;
      
    }
    .wrap:nth-child(4) {
      position: absolute;
      top: 65%;
      left: 30%;
      font-size: 15px;
      margin: 12px;
      
    }
    
    .input {
      border: 1px solid var(--colour-three);
      padding: 5px 35px;
      margin: 5px;
      border-radius: 5px;
      background: none;
      box-shadow: inset 10px 10px 6px -5px rgb(242, 102, 34);
      font-size: 12pt;
    }
    label {
      color: var(--colour-eight);
      display: block;
    }
    .button {
      background: var(--colour-six);
      position: absolute;
      width: 80px;
      top: 90%;
      right: 40%;
      padding: 5px;
      font-color: var(--colour-one);
      border-radius: 10px;
      border: none;
    }
    .button .sign {
      color: #fff;
      font-size: 15px;
      
    }
    .fox {
      position: absolute;
      top: 25%;
      left: 55%;
      height: 18%;
    }
    .back {
      position: absolute;
      top: 44%;
      left: 56%;
      font-size: 20px;
    }
    .log {
      position: absolute;
      top: 50%;
      left: 56%;
      font-size: 14px; 
    }
    .acc {
      position: absolute;
      top: 62%;
      left: 56%;
      font-size: 15px;
    }
    .customer {
      position: absolute;
      top: 72%;
      left: 56%;
      font-color: var(--colour-five);
      background: var(--colour-four);
      border-radius: 5px;
      border: none;
    }
    .res {
      position: absolute;
      top: 72%;
      left: 76%;
      font-color: var(--colour-five);
      background: var(--colour-four);
      border-radius: 5px;
      border: none;
    }
    h3 {
      font-size: 14px;
      color: var(--colour-five);
      padding: 5px;
    }
    </style>
    <div class="login_form">
        
          <div class="welcome">Welcome</div>
          <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="wrap">
              <label>Email</label>
              <input type="text" class="input" name="email" placeholder="Email" id="email">
              </div>
            <div class="wrap">
              <label>Password</label>
              <input type="password" class="input" data-type="password" placeholder="Password" id="password" name="password">
              </div>
            <div class="wrap">
              <label>Konfirmasi Password</label>
              <input type="password" class="input" data-type=" password" placeholder="Konfirmasi Password" id="konfirmasi password" name="konfirmasi password">
              </div>
            <button type="submit" class="button"><h1 class="sign">Register</h1></button>
          </form>
                
        
      </div>