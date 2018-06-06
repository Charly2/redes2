const electron = require('electron');
const {app, BrowserWindow } = electron;

let mainWindow;



app.on('ready',function(){
	mainWindow = new BrowserWindow({
		width: 1000,
		height: 700,
		webPreferences: {
 		nodeIntegration: false   }
	});


	mainWindow.setTitle('Redes Dos');
	mainWindow.loadURL('http://localhost/redes2/');
	mainWindow.setTitle('Redes Dos');

	mainWindow.on('closed',function(){
		mainWindow = null;
	});

});


app.on('browser-window-created',function(e,window) {
      window.setMenu(null);
  });