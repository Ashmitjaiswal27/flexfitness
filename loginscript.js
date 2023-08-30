const submitForm = async (e) => {
  e.preventDefault();

  API_BASE = "http://localhost/gym/";
  let url = API_BASE + "admin-login.php";
  const messageBody = {
    user: document.getElementById("ip1").value,
    pass: document.getElementById("ip2").value,
  };
  let headers = new Headers();
  headers.set("Content-type", "application/json");
  const response = await fetch(url, {
    method: "POST",
    body: JSON.stringify(messageBody),
    headers: headers,
    mode: "cors",
  });

//   console.log(response);
//   const data = await response.json();

//   console.log(data);
//   if (data.success === true) {
//     window.open("http://localhost/gym/billing.php");
//   } else {
//     window.alert("Invalid Credentials");
//   }

success = messageBody.user == "admin" && messageBody.pass == "password"
console.log(messageBody);

if (success === true) {
  console.log('hi');
        window.open("http://localhost/gym/getbilling.php");
      } else {
        window.alert("Invalid Credentials");
      }
};
document.getElementById("submitbutton").addEventListener("click", submitForm);
