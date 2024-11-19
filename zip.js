const fs = require('fs');
const archiver = require('archiver');

// 输出ZIP文件路径
const output = fs.createWriteStream(__dirname + '/project.zip');
const archive = archiver('zip', {
  zlib: { level: 9 } // 设置压缩级别
});

// 监听事件
output.on('close', function() {
  console.log(archive.pointer() + ' total bytes');
  console.log('ZIP file has been created');
});

archive.on('warning', function(err) {
  if (err.code === 'ENOENT') {
    console.warn('Warning:', err);
  } else {
    throw err;
  }
});

archive.on('error', function(err) {
  throw err;
});

// 设置输出文件流
archive.pipe(output);

// 调试信息：确认目录路径
const directoryPath = 'D:/laragon/www/homepage';
console.log('Adding directory:', directoryPath);

// 添加目录到ZIP文件
archive.directory(directoryPath, false);

// 结束归档并完成文件流
archive.finalize();
