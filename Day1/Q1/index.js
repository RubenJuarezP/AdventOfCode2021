const fileList = event.target.files;
let getDataContInfo = "";

const pfl = new FileReader();
pfl.onload = () => {
  getDataContInfo = pfl.result;
  console.log('Commands', getDataContInfo);
}

pfl.readAsText(fileList[0]);


