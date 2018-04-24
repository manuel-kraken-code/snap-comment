<?php
class comment {
	public function getCommentSaltiness():float {
		return $this-> commentSaltiness;
	}
	public function setCommentSaltiness(float $newCommentSaltiness): bool {
		// detects bad values - we already know it's float
		if ($newCommentSaltiness) {
			return true;
		} else {
			return false;
		}
	}
	public function  getCommentText(): string {
		return $this-> commentText;
	}
	public function getCommentUsername(): string {
		return $this-> commentUsername;
	}
}