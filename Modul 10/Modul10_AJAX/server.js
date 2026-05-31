const express = require('express');
const path = require('path');
const fs = require('fs');

const app = express();
const PORT = process.env.PORT || 3000;
const publicDir = path.join(__dirname);

app.use(express.static(publicDir));

app.get('/ajax_info', (req, res) => {
  const filePath = path.join(__dirname, 'ajax_info.txt');

  fs.readFile(filePath, 'utf8', (err, data) => {
    if (err) {
      console.error('Failed to read ajax_info.txt:', err);
      return res.status(500).send('Server error: unable to load content.');
    }

    res.type('html').send(data);
  });
});

app.listen(PORT, () => {
  console.log(`Server ready at http://localhost:${PORT}`);
});
