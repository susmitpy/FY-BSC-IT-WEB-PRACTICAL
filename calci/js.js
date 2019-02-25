function clc() {
  tv = tv.slice(0,-1);       
  setWindow(tv);
}

function updateWindow(txt)
{
    tv += txt;
    write(tv);
}

function setWindow(txt)
{
  tv = txt;
  write(tv);
}

function write(txt)
{
    document.getElementById("window").innerHTML = txt;
}

function solve()
{

  ans = math.eval(tv);
  setWindow(ans.toString());
}

