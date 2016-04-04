<?xml version="1.0" ?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
	<html>
		<body>
			<table border="1">
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Department</th>
					<th>Mobile No.</th>
					<th>Book Limit</th>
				</tr>
				<xsl:for-each select="library/student">
					<tr>
						<td><xsl:value-of select="id"></xsl:value-of></td>
						<td><xsl:value-of select="name/first"></xsl:value-of></td>
						<td><xsl:value-of select="name/middle"></xsl:value-of></td>
						<td><xsl:value-of select="name/last"></xsl:value-of></td>
						<td><xsl:value-of select="department"></xsl:value-of></td>
						<td><xsl:value-of select="mobile"></xsl:value-of></td>
						<td><xsl:value-of select="limit"></xsl:value-of></td>
					</tr>
				</xsl:for-each>
			</table>
		</body>
	</html>
</xsl:template>
</xsl:stylesheet>