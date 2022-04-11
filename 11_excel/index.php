<?php

require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

/* 写入excel */
$fileName = './test.xlsx';
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');
$sheet->setCellValue('C3', '你好 !');
 
$writer = new Xlsx($spreadsheet);
$writer->save($fileName);

/* 读取excel */
// $reader = new Xlsx();
// $spreadsheet = $reader->load($fileName);
$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($fileName);
// $reader->setReadDataOnly(true); // 设置后无法获取excel中的图片

$worksheet = $spreadsheet->getActiveSheet();
// $worksheet   = $spreadsheet->getSheetByName('testcase');
// $rawCasedata = $worksheet->toArray();
$highestRow  = $worksheet->getHighestRow(); // 取得总行数
$highestColumn = $worksheet->getHighestColumn(); // 取得总列数
$highestColumnIndex = Coordinate::columnIndexFromString($highestColumn); // 取得总列数

$excelData = [];
for ($row = 1; $row <= $highestRow; $row++) {
    for ($col = 1; $col <= $highestColumnIndex; $col++) {
        $excelData[$row][] = (string)$worksheet->getCellByColumnAndRow($col, $row)->getValue();
    }
}

echo "<pre>";
print_r($excelData);
echo "</pre>";

/* 读取excel中的图片 */
$imgpath = './';
$imgArray = array();
foreach ($worksheet->getDrawingCollection() as $drawing) {
    list($startColumn, $startRow) = Coordinate::coordinateFromString($drawing->getCoordinates());
    print_r($startColumn);
    print_r($startRow);
    switch ($drawing->getExtension()) {
    case 'jpeg':
        $source = imagecreatefromjpeg($drawing->getPath());
        $imgname = $imgpath . $drawing->getCoordinates() . '.jpg';
        imagejpeg($source, $imgname);
        break;
    case 'png':
        $source = imagecreatefrompng($drawing->getPath());
        $imgname = $imgpath . $drawing->getCoordinates() . '.png';
        imagepng($source, $imgname);
        break;
    default:  
        echo "Unsupported file type: " . $drawing->getExtension() . "\n";;              
    }
}

?>
