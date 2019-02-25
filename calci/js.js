function clc() {
  tv = tv.slice(0,-1);
  setWindow(tv);
}

function updateWindow(txt)
{
  tv += txt;
  document.getElementById("window").innerHTML = tv;
}

function setWindow(txt)
{
  tv = txt;
  document.getElementById("window").innerHTML = tv;
}

function solve()
{
  
  ans = math.eval(tv);
  setWindow(ans.toString());
}
