<?php $thisPage="Index"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>TV Guide App</title>
		<?php include('includes/head.php'); ?>
		<script type="text/javascript">
			var ieBug = ((document.all) && (!window.opera)); // IE doesn't really handle fixed elements well :)
			var fpElement = false;
			function fpCW() { return document.documentElement ? document.documentElement.clientWidth : document.clientWidth; }
			function fpCH() { return document.documentElement ? document.documentElement.clientHeight : document.clientHeight; }
			function fpTopLeft(elementNode, iTop, iLeft) {
				elementNode.style.top = (iTop)+"px";
				elementNode.style.left = (iLeft)+"px";
			}
			function fpDefaults(elementNode) {
				elementNode.style.position = ieBug ? "absolute" : "fixed";
				fpTopLeft(elementNode,0,0);
				return elementNode;
			}
			function fpClone(elementNode, cloneZindex) {
				var clone = fpDefaults(elementNode.cloneNode(true));
				clone.style.background = "#fff";
				clone.style.overflow = "hidden";
				clone.style.border = "none";
				clone.style.zIndex = cloneZindex;
				return clone;
			}
			function fpInitFreezePanes(fpTableElementId, fpTableContainerDivElementId, fpPivotCellId, fpDisableBodyScrollbars) {
				if (fpElement !== false) {
				  alert("Page already contains an element with fixed panes.");
				} else {
					var fpTableElement = document.getElementById(fpTableElementId);
					var fpTableContainerDivElement = document.getElementById(fpTableContainerDivElementId);
					var fpPivotCell = document.getElementById(fpPivotCellId);
					if ((!fpTableElement) || (!fpTableContainerDivElement) || (!fpPivotCell)) {
						alert("Unable to find table, container or pivoting cell?");
					} else {
						fpElement = fpTableContainerDivElement;
						if (fpDisableBodyScrollbars) {
							var x = document.getElementsByTagName("body")[0];
							x.style.overflow = "hidden";
							x = document.getElementsByTagName("html")[0];
							x.style.overflow = "hidden";
						}
						fpTableContainerDivElement = fpDefaults(fpTableContainerDivElement);
						fpTableContainerDivElement.style.width = (fpCW()-2)+"px";
						fpTableContainerDivElement.style.height = (fpCH()-2)+"px";
						fpTableContainerDivElement.fpPT = fpPivotCell.offsetTop;
						fpTableContainerDivElement.fpPL = fpPivotCell.offsetLeft;

						var copy1 = fpClone(fpTableContainerDivElement, 4);
						copy1.style.width = (fpTableContainerDivElement.fpPL)+"px";
						copy1.style.height = (fpTableContainerDivElement.fpPT)+"px";
						var copy2 = fpClone(fpTableContainerDivElement, 3);
						copy2.style.width = (fpTableElement.offsetWidth)+"px";
						copy2.style.height = (fpTableContainerDivElement.fpPT)+"px";
						var copy3 = fpClone(fpTableContainerDivElement, 2);
						copy3.style.width = (fpTableContainerDivElement.fpPL)+"px";
						copy3.style.height = (fpTableElement.offsetHeight)+"px";

						fpTableContainerDivElement.style.zIndex = 1;
						fpTableContainerDivElement.appendChild(copy1);
						fpTableContainerDivElement.copy1 = copy1;
						fpTableContainerDivElement.appendChild(copy2);
						fpTableContainerDivElement.copy2 = copy2;
						fpTableContainerDivElement.appendChild(copy3);
						fpTableContainerDivElement.copy3 = copy3;
						fpTableContainerDivElement.repositioning = false;
						fpTableContainerDivElement.oldST = -1;
						fpTableContainerDivElement.oldSL = -1;
						fpTableContainerDivElement.style.overflow = "scroll";

						/* JUST SOME STYLING HERE */
						copy1.style.borderRight = "1px dashed #000";
						copy1.style.borderCollapse = "collapse";
						copy2.style.borderBottom = "1px dashed #000";
						copy2.style.borderCollapse = "collapse";
						copy3.style.borderRight = "1px dashed #000";
						copy3.style.borderCollapse = "collapse";
						/* JUST SOME STYLING HERE */

						// if (ieBug) {
						if (fpTableContainerDivElement.style.setExpression) {
							function fpIeBugFix(elementNode, containerNodeId, arrayOfExpressionsToSet) {
								for (var i in arrayOfExpressionsToSet) {
									if (arrayOfExpressionsToSet[i][2]) {
										elementNode.style.setExpression(arrayOfExpressionsToSet[i][0], arrayOfExpressionsToSet[i][1]+"document.getElementById('"+containerNodeId+"')."+arrayOfExpressionsToSet[i][2]+"+'px'");
									} else {
										elementNode.style.setExpression(arrayOfExpressionsToSet[i][0], arrayOfExpressionsToSet[i][1]);
									}
								}
							}
							fpIeBugFix(fpTableContainerDivElement.copy3, fpTableContainerDivElementId, [["top","","scrollTop"],["left","","scrollLeft"],["marginTop","-","scrollTop"]]);
							fpIeBugFix(fpTableContainerDivElement.copy2, fpTableContainerDivElementId, [["top","","scrollTop"],["left","","scrollLeft"],["marginLeft","-","scrollLeft"]]);
							fpIeBugFix(fpTableContainerDivElement.copy1, fpTableContainerDivElementId, [["top","","scrollTop"],["left","","scrollLeft"]]);
							fpIeBugFix(fpTableContainerDivElement, fpTableContainerDivElementId, [["width","fpCW()+'px'"],["height","fpCH()+'px'"]]);
							document.recalc(true);
						} else {
							fpElement.onmousemove = fpElement.onscroll = function() {
								if (!this.repositioning) {
									this.repositioning = true;
									var st = this.scrollTop;
									var sl = this.scrollLeft;
									if ((this.oldST != st) || (this.oldSL != sl)) {
										this.oldST = st;
										this.oldSL = sl;
										// this.copy3.previousDisplay = this.copy3.style.display;
										// this.copy3.style.display = "none";
										this.copy3.style.marginTop = "-"+(st)+"px";
										// this.copy3.style.display = this.copy3.previousDisplay;
										// this.copy2.previousDisplay = this.copy2.style.display;
										// this.copy2.style.display = "none";
										this.copy2.style.marginLeft = "-"+(sl)+"px";
										// this.copy2.style.display = this.copy2.previousDisplay;
									}
									fpElement.repositioning = false;
								}
							};
							window.onresize = function() {
								fpElement.style.width = fpCW()+"px";
								fpElement.style.height = fpCH()+"px";
							}
						}
					}
				}
			}
		</script>
	</head>
	<body onLoad="fpInitFreezePanes('fp','fpdiv','pivot', true);">
		<div id="container">
			<div id="fpdiv" class="freeze_panes">
				<table id="fp" class="b">
					<tr class="period header">
						<td class="">[Time]</td>
						<td class="channel">
							BBC One
						</td>
						<td class="channel">
							BBC Two
						</td>
						<td class="channel">
							ITV 1
						</td>
						<td class="channel">
							Channel 4
						</td>
					</tr>
					<tr class="period hour listings">
						<td class="">
							<p class="timeMarker">
								<span class="hour">4</span>
								<span class="minutes">:00</span>
							</p>
						</td>
						<td class="channel" id="pivot">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
					</tr>
					<tr class="period hour listings">
						<td class="">
							<p class="timeMarker">
								<span class="hour">4</span>
								<span class="minutes">:00</span>
							</p>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
					</tr>
					<tr class="period hour listings">
						<td class="">
							<p class="timeMarker">
								<span class="hour">4</span>
								<span class="minutes">:00</span>
							</p>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
						<td class="channel">
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:15</span>
									</li>
									<li class="title">
										Points of View
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(2505342)</li>
										</ul>
									</li>
									<li class="description">
									
									</li>
								</ul>
							</div>
							<div class="programme">
								<ul>
									<li class="time">
										<span class="hour">4</span>
										<span class="minutes">:30</span>
									</li>
									<li class="title">
										Songs of Praise
									</li>
									<li class="info">
										<ul>
											<li class="hd">HD</li>
											<li class="videoplus">(6585381)</li>
										</ul>
									</li>
									<li class="description">
										Pupils from Milton Keynes sing popular school hymns.
									</li>
								</ul>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
