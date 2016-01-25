	<?php 
						$street = street_address();
						$city = city_address();
						$address = $street."+".$city;
						$splode = explode(" ", $address);
						$unsplode = implode("+", $splode);
					?>
					<?php if ($street != "" && $city != "") { ?>
					<div class="address">
						<a href="https://www.google.com/maps/place/<?php echo $unsplode; ?>" target="_blank">
							<span class="icomoon" style="color:#ea5252;">d</span>
							<?php echo street_address(); ?>
							<br><span style="padding-left:1.2em"><?php echo city_address(); ?></span>
						</a>
					</div>
