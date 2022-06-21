html, body{
    padding: 0px !important;
    margin: 0px !important;
    background-image: linear-gradient(to right, #0096c7 , #48cae4);
    font-family: poppins;
}

@font-face {
    font-family: poppins;
    src: url('../fonts/Poppins-Medium.ttf');
}

*{
    box-sizing: border-box;
}

a{
    text-decoration: none;
}

.logo{
    object-fit: contain;
    width: 50%;
}

.container{
    min-height: 600px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.box-login{
    border-radius: 5px;
    width: 350px;
    min-height: 350px;
    background-color: white;
    display: flex;
    align-items: center;
    padding: 30px 10px 20px 10px;
    flex-direction: column;
}

form{
    width: 100%;
}

form input{
    padding-left: 10px;
    padding-right: 10px;
    margin-top: 10px;
    border: none;
    width: 100%;
    height: 40px;
    background: #F3F2F3;
    outline: none;
}

form button{
    margin-top: 20px;
    border: none;
    width: 100%;
    height: 40px;
    background-color: #0096c7;
    color: white;
    text-align: center;
    text-transform: capitalize;
}
