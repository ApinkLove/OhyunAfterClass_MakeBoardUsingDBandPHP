<!DOCTYPE html>
<html>
<head>
<title>게시판</title>
</head>

<body>
<center>
<br>
 <!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
 <form action="insert.php" method="post">
 <table width="800" border="1">
     <tr>
         <td align="center"><b>글 쓰 기</b></td>
     </tr>
     <!-- 입력 부분 -->
     <tr>
         <td>
         <table>
             <tr>
                 <td align="left">이름</td>
                 <td align="left"><input type="text" name="name" size="20" maxlength="10"></td>
             </tr>
             <tr>
                 <td align="left">이메일</td>
                 <td align="left"><input type="text" name="email" size="20" maxlength="25"></td>
             </tr>
             <tr>
                 <td align="left">비밀번호</td>
                 <td align="left">
 					<input type="password" name="pw" size="8" maxlength="8"> 
                     (수정,삭제시 반드시 필요)
                 </td>
             </tr>
             <tr>
                 <td align="left">제 목</td>
                 <td align="left"><input type="text" name="title" size="60" maxlength="35"></td>
             </tr>
             <tr>
                 <td align="left">내용</td>
                 <td align="left"><textarea name="content" cols="80" rows="15"></textarea></td>
             </tr>
             <tr>
                 <td colspan="10" align="center">
                     <input type="submit" value="글 저장하기">
                     &nbsp;&nbsp;
                     <input type="reset" value="다시 쓰기">
                     &nbsp;&nbsp;
                     <input type="button" value="되돌아가기" onClick="history.back(-1)">
                 </td>
             </tr>
         </table>
 </td>
 </tr>
 <!-- 입력 부분 끝 -->
 </table>
 </form>
 </center>
 </body>
 </html>
