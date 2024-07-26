$.noConflict();

function addChild(id) {
	jQuery('.standardSelect').val(id).trigger("chosen:updated");
	jQuery('#addnew').modal('show');
}

function editeCategory(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/category-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeText(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/text-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}



function disableManager(id) {
	if (id) {
		jQuery.ajax({
			url: "/manager/manager-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}

function copyCategory(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/category-copy?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function editePartner(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/partner-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeAnswerHth(id) {

	if (id) {
		jQuery.ajax({
			url: "/admin/answerhth-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeLesson(id) {

	if (id) {
		jQuery.ajax({
			url: "/admin/lesson-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeSubscribers(id) {

	if (id) {
		jQuery.ajax({
			url: "/admin/subscribers-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeAlumni(id) {

	if (id) {
		jQuery.ajax({
			url: "/admin/alumni-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeInfo(id) {

	if (id) {
		jQuery.ajax({
			url: "/admin/info-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeTutors(id) {

	if (id) {
		jQuery.ajax({
			url: "/admin/tutors-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeReview(id) {

	if (id) {
		jQuery.ajax({
			url: "/admin/review-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function editeStore(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/store-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function copyStore(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/store-copy?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function editeUser(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/user-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function copyUser(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/user-copy?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
function disableUser(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/user-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disablePartner(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/partner-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableAnswerHth(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/answerhth-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableAnswer(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/answer-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableLesson(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/lesson-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableSubscribers(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/subscribers-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableTutors(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/tutors-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableAlumni(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/alumni-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableQuest(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/quest-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableQ(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/questions-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableBlog(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/blog-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function disableReview(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/review-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}
function editeBlog(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/blog-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function editeBanner(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/banner-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function disableParams(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/params-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}

function disableBanner(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/banner-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}

function copyParams(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/params-copy?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function copyBanner(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/banner-copy?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function editeMeasurement(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/measurement-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function disableMeasurement(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/measurement-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}

function copyMeasurement(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/measurement-copy?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function editeOrder(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/order-edite?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}

function disableProduct(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/product-disable?id=" + id,
			success: function(result) {
				window.location.reload();
			}
		});
	}
}

function copyProduct(id) {
	if (id) {
		jQuery.ajax({
			url: "/admin/product-copy?id=" + id,
			success: function(result) {
				jQuery(".modals").html(result);
			}
		});
	}
}
jQuery(document).ready(function($) {

	"use strict";
	[].slice.call(document.querySelectorAll('select.cs-select')).forEach(function(el) {
		new SelectFx(el);
	});
	jQuery('.selectpicker').selectpicker;



	$('body').on('change', '.count_', function(event) {
		if ($(this).val()) {
			$(this).closest('tr').find('.ck').attr('checked','checked');
		}
	});
	$('body').on('change', '.colorSel', function(event) {
		if ($(this).val()) {
			var price = $(this).find(':selected').attr('data-price')
			$(this).closest('tr').find('.ck').attr('data-price',price);
			$(this).closest('tr').find('.ck').attr('data-variation',$(this).val());
			$(this).closest('tr').find('.pr_').html(price);
		}
	});
	$('body').on('click', '#add', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		addChild(id);
	});
	$('body').on('click', '#prop_procent', function(event) {
		if ($(this).is(':checked')) {
			$('.tax-block').removeClass('hide');
		} else {
			$('.tax-block').addClass('hide');
		}
	});
    $('body').on('mouseup','button', function(){
    
    if($(this).hasClass('left')){
       $('.tbl').scrollLeft( $('.tbl').scrollLeft()-400 );
    } else {
        $('.tbl').scrollLeft($('.tbl').scrollLeft()+400 );
    };


});

	$('body').on('click', '.deletProduct', function(event) {
		$(this).closest('tr').remove();
	});
	$('body').on('click', '#edite', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		editeCategory(id);
	});
	$('body').on('click', '#editeDiscount', function(event) {

		var id = $('tr.active').attr('data-id');
		editeDiscount(id);
	});

	$('body').on('click', '#copy', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		copyCategory(id);
	});
	$('body').on('click', '.addParam', function(event) {
		var cl = $('.clone').first().clone().removeClass('clone').css('display', 'block');
		$('.clone').parent().append(cl);
		var cl_ru = $('.clone_ru').first().clone().removeClass('clone_ru').css('display', 'block');
		$('.clone_ru').parent().append(cl_ru);
		var cl_en = $('.clone_en').first().clone().removeClass('clone_en').css('display', 'block');
		$('.clone_en').parent().append(cl_en);

	});
	$('body').on('click', '#disable', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		disableCategory(id);
	});
	$('body').on('click', '#editeMeasurement', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		editeMeasurement(id);
	});
	$('body').on('click', '#copyMeasurement', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		copyMeasurement(id);
	});
	$('body').on('click', '#copyProduct', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		copyProduct(id);
	});
	$('body').on('click', '#editeOrder', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeOrder(id);
	});
	$('body').on('click', '#editeBrand', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeBrand(id);
	});
	$('body').on('click', '#editeText', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeText(id);
	});
	$('body').on('click', '#editeProduct', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeProduct(id);
	});
	$('body').on('click', '#editeBlog', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
        editeBlog(id);
	});
	$('body').on('click', '#editeManager', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeManager(id);
	});
	$('body').on('click', '#editeBanner', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeBanner(id);
	});
	$('body').on('click', '#copyPage', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		copyPage(id);
	});
	$('body').on('click', '#copyBrand', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		copyBrand(id);
	});
	$('body').on('click', '#copyBanner', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		copyBanner(id);
	});
	$('body').on('click', '#disableProduct', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		disableProduct(id);
	});
	$('body').on('click', '#disableManager', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		disableManager(id);
	});
	$('body').on('click', '#disableBrand', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		disableBrand(id);
	});
	$('body').on('click', '#disableBlog', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		disableBlog(id);
	});
	$('body').on('click', '#disableBanner', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		disableBanner(id);
	});
	$('body').on('click', '#disableParams', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		disableParams(id);
	});
	$('body').on('click', '#editeLesson', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editeLesson(id);
	});
	$('body').on('click', '#editeSubscribers', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editeSubscribers(id);
	});
	$('body').on('click', '#editeAlumni', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editeAlumni(id);
	});
	$('body').on('click', '#editeInfo', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editeInfo(id);
	});
	$('body').on('click', '#editeTutors', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editeTutors(id);
	});
	$('body').on('click', '#copyParams', function(event) {
		var id = $('.sortable li.active').attr('data-id');
		copyParams(id);
	});
	$('body').on('click', '#disableStore', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableStore(id);
	});
	$('body').on('click', '#editeStore', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editeStore(id);
	});
	$('body').on('click', '#copyStore', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		copyStore(id);
	});
	$('body').on('click', '#disableUser', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableUser(id);
	});
	$('body').on('click', '#disablePartner', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disablePartner(id);
	});
	$('body').on('click', '#disableAnswerHth', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableAnswerHth(id);
	});
	$('body').on('click', '#disableLesson', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableLesson(id);
	});
	$('body').on('click', '#disableSubscribers', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableSubscribers(id);
	});
	$('body').on('click', '#disableTutors', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableTutors(id);
	});
	$('body').on('click', '#disableAlumni', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableAlumni(id);
	});
	$('body').on('click', '#disableAnswer', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableAnswer(id);
	});
	$('body').on('click', '#disableQuest', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableQuest(id);
	});
	$('body').on('click', '#disable', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableQ(id);
	});
	$('body').on('click', '#disableReview', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		disableReview(id);
	});
	$('body').on('click', '#editeUser', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editeUser(id);
	});
	$('body').on('click', '#editePartner', function(event) {
		var id = $('.sortableTable  tr.active').attr('data-id');
		editePartner(id);
	});

	$('body').on('click', '#editeAnswerHth', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeAnswerHth(id);
	});
	$('body').on('click', '#editeReview', function(event) {
		var id = $('.sortableTable tr.active').attr('data-id');
		editeReview(id);
	});
	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});
	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});
	$('.equal-height').matchHeight({
		property: 'max-height'
	});


	// Counter Number
	$('.count').each(function() {
		$(this).prop('Counter', 0).animate({
			Counter: $(this).text()
		}, {
			duration: 3000,
			easing: 'swing',
			step: function(now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
	// Menu Trigger
	$('#menuToggle').on('click', function(event) {
		var windowWidth = $(window).width();
		if (windowWidth < 1010) {
			$('body').removeClass('open');
			if (windowWidth < 760) {
				$('#left-panel').slideToggle();
			} else {
				$('#left-panel').toggleClass('open-menu');
			}
		} else {
			$('body').toggleClass('open');
			$('#left-panel').removeClass('open-menu');
		}

	});
	$(".menu-item-has-children.dropdown").each(function() {
		$(this).on('click', function() {
			var $temp_text = $(this).children('.dropdown-toggle').html();
			$(this).children('.sub-menu').prepend('<li class="subtitle">' + $temp_text + '</li>');
		});
	});

	// Load Resize
	$(window).on("load resize", function(event) {
		var windowWidth = $(window).width();
		if (windowWidth < 1010) {
			$('body').addClass('small-device');
		} else {
			$('body').removeClass('small-device');
		}

	});


});
